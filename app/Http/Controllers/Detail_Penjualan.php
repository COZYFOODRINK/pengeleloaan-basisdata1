<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail_Penjualan_Model;

class Detail_Penjualan extends Controller
{
    //    // Fungsi untuk melihat data detail penjualan
    //    //fungsi untuk melihat data pelanggan
    // public function lihat_data_detail_penjualan()
    // {
    //     //1. Panggil model detail penjualan beserta relasi produk dan pelanggan
    //     $data = Detail_Penjualan_Model::with(['produk', 'penjualan.pelanggan'])->get();

    //     //2. Tampilkan halaman detail penjualan beserta data yang di ambil
    //     return view('data_detail_penjualan', compact('data'));
    // }
}
