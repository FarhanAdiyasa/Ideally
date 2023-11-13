<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konkurito extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_konkurito',
        'nama_produk',
        'slug',
        'jenis',
        'spesifikasi',
        'satuan',
        'garansi',
        'warna_1',
        'warna_2',
        'dimensi',
        'gambar_1',
        'gambar_2',
        'gambar_3',
        'gambar_4',
        'gambar_5',
        'video',
        'stok',
        'item_terjual',
        'deskripsi_singkat',
        'hpp',
        'harga_b2I_11+_unit',
        'harga_b2I_1+_unit',
        'harga_b2B_11+_unit',
        'harga_b2B_1+_unit',
        'harga_b2C_11+_unit',
        'harga_b2C_1+_unit',
        'tanggal_publikasi',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

}
