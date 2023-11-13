<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel_Tersimpan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_artikel',
        'date',
    ];

}
