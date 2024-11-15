<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_stok_barang extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function data_pembelian_barang()
    {
        return $this->belongsTo(data_pembelian_barang::class);
    }
}
