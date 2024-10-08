<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban_Survey extends Model
{
    use HasFactory;

    protected $guarded = ['id_jawaban_survey'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pertanyaan_survey()
    {
        return $this->belongsTo(Pertanyaan_Survey::class);
    }


    /*protected $fillable = [
        'id_survey',
        'jawaban',
        'created_at',
    ];*/

}
