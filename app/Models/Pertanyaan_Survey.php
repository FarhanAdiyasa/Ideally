<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan_Survey extends Model
{
    use HasFactory;

    protected $guarded = ['id_pertanyaan_survey'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jawaban_survey()
    {
        return $this->hasMany(Jawaban_Survey::class);
    }

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }


    /*protected $fillable = [
        'id_survey',
        'pertanyaan_survey',
    ];*/

}
