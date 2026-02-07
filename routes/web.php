<?php

use App\Http\Controllers\Pelanggan;
use App\Http\Controllers\Produk;
use App\Http\Controllers\Penjualan;
use App\Http\Controllers\Detail_Penjualan;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('produk');
// });

// Route untuk halaman utama
Route::get('/', function () {
    return view('index');
});

// route untuk menampilkan form input data pelanggan
Route::get('/inputdata', function () {
    return view('pelanggan');
});

// Ini route ke proses data
Route::post('/inputdata1', [Pelanggan::class, 'proses_data_pelanggan'])->name('insert');

// route untuk melihat data pelanggan
Route::get('/datapelanggan', [Pelanggan::class, 'lihat_data_pelanggan'])->name('read');

//update data pelanggan
Route::get('/form_update_pelanggan/{id}', [Pelanggan::class, 'edit_data_pelanggan'])->name('form_update');

//route untuk update data pelanggan
Route::post('/update_data_pelanggan/{id}', [Pelanggan::class, 'update_data_pelanggan'])->name('update');

//route untuk menghapus data pelanggan
 Route::get('/delete_data_pelanggan/{id}', [Pelanggan::class, 'delete_data_pelanggan'])->name('delete');

 // route untuk menampilkan form input data produk
Route::get('/input-produk', function () {
    return view('produk');
});

// Ini route ke proses data produk
Route::post('/input-produk/proses', [Produk::class, 'proses_data_produk'])->name('insert.produk');

// route untuk melihat data produk
Route::get('/dataproduk', [Produk::class, 'lihat_data_produk'])->name('data.produk');

//route update produk
Route::get('/form_update_produk/{id}', [Produk::class, 'edit_data_produk'])->name('form_update.produk');

//route untuk proses update data produk
Route::post('/update_data_produk/{id}', [Produk::class, 'update_data_produk'])->name('update.produk');

//route untuk menghapus data produk
Route::get('/delete_data_produk/{id}', [Produk::class, 'delete_data_produk'])->name('delete.produk');

// route untuk menampilkan form input data penjualan
Route::get('/input-penjualan', [Penjualan::class, 'index'])->name('penjualan.index');

// Ini route ke proses data penjualan
Route::post('/input-penjualan/proses', [Penjualan::class, 'proses_data_penjualan'])->name('insert.penjualan');

// route untuk melihat data penjualan
Route::get('/datapenjualan', [Penjualan::class, 'lihat_data_penjualan'])->name('data.penjualan');

// route untuk melihat data detail penjualan
Route::get('/datadetailpenjualan', [Detail_Penjualan::class, 'lihat_data_detail_penjualan'])->name('data.detail.penjualan');