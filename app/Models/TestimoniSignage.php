<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimoniSignage extends Model
{
    use HasFactory;

    protected $guarded = ['id_testimoni_shineage'];
    protected $primaryKey = 'id_testimoni_shineage'; 

    protected $fillable = [
        'id_users',
        'id_orders',
        'id_shine_ages',
        'Deskripsi',
    ];
}
