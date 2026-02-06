<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail_Penjualan_Model extends Model
{
    protected $table = 'detailpenjualan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'penjualan_id',
        'produk_id',
        'JumlahProduk',
        'SubTotal',
    ];

    public function produk()
    {
        return $this->belongsTo(ProdukModel::class, 'produk_id', 'id');
    }

    public function penjualan()
    {
        return $this->belongsTo(PenjualanModel::class, 'penjualan_id', 'id');
    }
}
