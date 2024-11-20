<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimoniEverlasting extends Model
{
    use HasFactory;

    protected $guarded = ['id_testimoni_everlasting'];
    protected $primaryKey = 'id_testimoni_everlasting'; 

    protected $fillable = [
        'id_users',
        'id_orders',
        'id_everlasting',
        'Deskripsi',
    ];
}
