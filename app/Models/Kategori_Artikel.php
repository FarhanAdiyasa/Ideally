<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori_Artikel extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_kategori_artikel',
        'nama_kategori_artikel',
    ];

}
