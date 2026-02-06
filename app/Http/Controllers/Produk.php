<?php

namespace App\Http\Controllers;

use App\Models\produkmodel;
use Illuminate\Http\Request;

class Produk extends Controller
{
    // input data produk
    public function proses_data_produk(Request $request)
    {
        try {
           //validasi
        $validation = $request->validate([
            'NamaProduk' => 'required|string|max:255',
            'Harga' => 'required|numeric',
            'Stok' => 'required|integer',
        ]);

        //proses insert
        ProdukModel::create($validation);

        //Jika sukses, kembali ke halaman insert
        return redirect()->back()->with('sukses', 'data disimpan');

        } catch (\exception $e) {
            return redirect()->back()->with('gagal', $e->getMessage());
        } 
    }

    //lihat data produk
    public function lihat_data_produk()
        {
        //1. Panggil model produk
        $data = ProdukModel::get();

        //2. Tampilkan halaman produk beserta data yang di ambil
        return view('dataproduk', compact('data'));
    }

    //fungsi untuk menampilkan form update data produk
    public function edit_data_produk($id)
    {
        //1. Panggil model produk berdasarkan id
        $data = ProdukModel::findOrFail($id);   


        //2. Tampilkan halaman form update produk beserta data yang di ambil
        return view('form_update_produk', compact('data'));
    }
    //fungsi untuk update data produk

    public function update_data_produk(Request $request, $id){
        try {
            //1. Buat validasi
                $request->validate([
                    'NamaProduk' => 'required|string',
                    'Harga' => 'required|numeric',
                    'Stok' => 'required|integer',
                ]);

            //2. Buat proses update
                $data_id = ProdukModel::findOrFail($id);
                $data_id->update([
                    'NamaProduk' => $request->NamaProduk,
                    'Harga' => $request->Harga,
                    'Stok' => $request->Stok,
                ]);

                return redirect()->route('data.produk')->with('sukses', 'data di update');
            } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }     
    }

    //Fungsi delete data produk
    public function delete_data_produk($id){
        try {
            //1. Panggil data berdasarkan id
            $data_id = ProdukModel::findOrFail($id);

            //2. Hapus data
            $data_id->delete();

            return redirect()->back()->with('sukses', 'data di hapus');
        } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Gagal menghapus data: ' . $e->getMessage());
        }
    }
}
