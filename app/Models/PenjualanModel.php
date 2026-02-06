<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PenjualanModel extends Model
{
    protected $table = 'penjualan';

    // Disable timestamps
    public $timestamps = false;

    protected $fillable = [
        'pelanggan_id',
        'Tanggal_Penjualan',
        'TotalHarga'];
    
    public function pelanggan()
    {
        return $this->belongsTo(PelangganModel::class, 'pelanggan_id', 'id');
    }
    public function detailPenjualan()
    {
        return $this->hasMany(Detail_Penjualan_Model::class, 'penjualan_id', 'id');
    }
}
