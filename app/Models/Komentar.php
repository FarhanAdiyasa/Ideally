<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_komentar',
        'isi_komentar',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

}
