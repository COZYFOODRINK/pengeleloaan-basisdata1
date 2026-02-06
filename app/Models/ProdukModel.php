<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdukModel extends Model
{
    //nama tabel
    protected $table = 'produk';

        // Disable timestamps
    public $timestamps = false;

    //nama kolom yang diinput
    protected $fillable = [
        'NamaProduk',
        'Harga',
        'Stok',
    ];            
}
