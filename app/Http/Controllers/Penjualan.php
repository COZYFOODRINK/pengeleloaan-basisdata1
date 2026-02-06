<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail_Penjualan_Model;
use App\Models\PenjualanModel;
use App\Models\PelangganModel;  
use App\Models\ProdukModel;
use Illuminate\Support\Facades\DB;

class Penjualan extends Controller
{
    public function index() {

        //lihat halaman penjualan
        $pelanggan = PelangganModel::all();
        $produk = ProdukModel::all();
        return view('formpenjualan', compact('pelanggan','produk'));
    }    
    
    //fungsi untuk input data pelanggan   
    public function proses_data_penjualan(Request $request)
    {
        try {
            //validasi form
            $validated = $request->validate([
                'pelanggan_id' => 'required|Exists:pelanggan,id',
                'produk_id' => 'required|Exists:produk,id',
                'Tanggal_Penjualan' => 'required|date',
                'JumlahProduk' => 'required|integer|min:1',
            ]);

            $produk = ProdukModel::findOrFail($validated['produk_id']);

            $validated['TotalHarga'] = $produk->Harga * $validated['JumlahProduk'];

            DB::transaction(function () use ($validated) {
                //create penjualan
                $penjualan = PenjualanModel::create([
                    'pelanggan_id' => $validated['pelanggan_id'],
                    'Tanggal_Penjualan' => $validated['Tanggal_Penjualan'],                             
                    'TotalHarga' => $validated['TotalHarga'],
                ]);
                //Create detail_penjualan
                Detail_Penjualan_Model::create([
                    'penjualan_id' => $penjualan->id,
                    'produk_id' => $validated['produk_id'],
                    'JumlahProduk' =>$validated['JumlahProduk'],
                    'SubTotal' => $validated['TotalHarga'],
                ]);
            });

            // //proses insert
            // PenjualanModel::create($validated);
                
            //untuk debugging
            // dd($validated);

            // Jika sukses, kembali ke halaman sebelumnya
            return redirect()->route('penjualan.index')->with('sukses', 'data disimpan');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        } 
    }
    
    //fungsi untuk melihat data penjualan
    public function lihat_data_penjualan()
    {
        //1. Panggil model penjualan beserta relasi pelanggan
        $data = PenjualanModel::with('pelanggan')->get();
        $simpan = Detail_Penjualan_Model::with(['produk'])->get();

        //2. Tampilkan halaman penjualan beserta data yang di ambil
        return view('datapenjualan', compact('data', 'simpan'));
    }   


}
