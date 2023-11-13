<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan_Survey extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_survey',
        'pertanyaan_survey',
    ];

}
