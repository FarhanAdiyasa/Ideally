<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batunesia extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_batu',
        'nama_produk',
        'slug',
        'kategori',
        'spek',
        'satuan',
        'warna',
        'gambar_1',
        'gambar_2',
        'gambar_3',
        'video',
        'stok',
        'item_terjual',
        'deskripsi_singkat',
        'hpp',
        'harga_b2I_31+_unit',
        'harga_b2I_11+_unit',
        'harga_b2I_1+_unit',
        'harga_b2B_31+_unit',
        'harga_b2B_11+_unit',
        'harga_b2B_1+_unit',
        'harga_b2C_31+_unit',
        'harga_b2C_11+_unit',
        'harga_b2C_1+_unit',
        'tanggal_publikasi',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

}
