<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban_Survey extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_survey',
        'jawaban',
        'created_at',
    ];

}
