<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimoniAgrigard extends Model
{
    use HasFactory;

    
    protected $guarded = ['id_testimoni_agrigard'];
    protected $primaryKey = 'id_testimoni_agrigard'; 

    protected $fillable = [
        'id_users',
        'id_orders',
        'id_agri_gard',
        'Deskripsi',
    ];
}
