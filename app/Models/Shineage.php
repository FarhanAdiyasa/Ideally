<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shineage extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_shineage',
        'seri',
        'nama_produk',
        'slug',
        'jenis',
        'garansi',
        'warna',
        'dimensi',
        'material_pendukung',
        'finishing',
        'gambar_1',
        'gambar_2',
        'gambar_3',
        'gambar_4',
        'gambar_5',
        'gambar_6',
        'video',
        'deskripsi_singkat',
        'stok',
        'item_terjual',
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
