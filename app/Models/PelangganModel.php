<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PelangganModel extends Model
{
    //Nama Tabel
    protected $table = 'pelanggan';

    //nama kolom yang diinput
    protected $fillable = [
        'NamaPelanggan',
        'Alamat',
        'NomorTelepon',
    ];
}
