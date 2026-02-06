<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PelangganModel;

class Pelanggan extends Controller
{
    //fungsi untuk input data pelanggan
    public function proses_data_pelanggan(Request $request)
    {
        try {
            //validasi form
            $validated = $request->validate([
                'NamaPelanggan' => 'required|string',
                'Alamat' => 'required|string',
                'NomorTelepon' => 'required|digits_between:10,12',
            ]);
            
            //proses insert
            PelangganModel::create($validated);

            // Jika sukses, kembali ke halaman sebelumnya
            return redirect()->back()->with('sukses', 'data disimpan');

            //untuk debugging
            // dd($insert);

        } catch (\exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        } 
    }

    //fungsi untuk melihat data pelanggan
    public function lihat_data_pelanggan()
    {
        //1. Panggil model pelanggan
        $data = PelangganModel::get();

        //2. Tampilkan halaman pelanggan beserta data yang di ambil
        return view('datapelanggan', compact('data'));
    }

    //fungsi untuk menampilkan form update data pelanggan
    public function edit_data_pelanggan($id)
    {
        //1. Panggil model pelanggan berdasarkan id
        $data = PelangganModel::findOrFail($id);

        //2. Tampilkan halaman edit pelanggan beserta data yang di ambil
        return view('form_update_pelanggan', compact('data'));
    }

    //fungsi untuk update data pelanggan
    public function update_data_pelanggan(Request $request, $id){
        try {
            //1. buat validasi
                $request->validate([
                    'NamaPelanggan' => 'required|string',
                    'Alamat' => 'required|string',
                    'NomorTelepon' => 'required|digits_between:10,12',
                ]);

            //2. Buat proses update
            $data_id = PelangganModel::findOrFail($id);
            $data_id->update([
                'NamaPelanggan' => $request->NamaPelanggan,
                'Alamat' => $request->Alamat,
                'NomorTelepon' => $request->NomorTelepon,
            ]);

            return redirect()->route('read')->with('sukses', 'data di update');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }     
    }

    //fungsi untuk menghapus data pelanggan
    public function delete_data_pelanggan($id){
        try {
            //1. Panggil data berdasarkan id
            $data_id = PelangganModel::findOrFail($id);

            //2. Hapus data
            $data_id->delete();

            return redirect()->back()->with('sukses', 'data di hapus');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus data: ' . $e->getMessage());
        }     
    }
}