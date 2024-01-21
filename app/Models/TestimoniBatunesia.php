<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimoniBatunesia extends Model
{
    use HasFactory;

    protected $guarded = ['id_testimoni_batunesia'];
    protected $primaryKey = 'id_testimoni_batunesia'; 

    protected $fillable = [
        'id_users',
        'id_orders',
        'id_batunesia',
        'Deskripsi',
    ];
}
