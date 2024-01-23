<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimoniKonkurito extends Model
{
    use HasFactory;

    protected $guarded = ['id_testimoni_konkurito'];
    protected $primaryKey = 'id_testimoni_konkurito'; 

    protected $fillable = [
        'id_users',
        'id_orders',
        'id_konku_ritos',
        'Deskripsi',
    ];
}
