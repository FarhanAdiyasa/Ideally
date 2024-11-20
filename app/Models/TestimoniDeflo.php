<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimoniDeflo extends Model
{
    use HasFactory;

    protected $guarded = ['id_testimoni_deflo'];
    protected $primaryKey = 'id_testimoni_deflo'; 

    protected $fillable = [
        'id_users',
        'id_orders',
        'id_deflo',
        'Deskripsi',
    ];
}
