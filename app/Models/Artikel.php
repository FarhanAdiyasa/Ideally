<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_artikel',
        'judul_artikel',
        'slug',
        'deskripsi_artikel',
        'isi_artikel',
        'penulis_artikel',
        'gambar_artikel',
        'keywords',
        'tanggal_publikasi',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

}
