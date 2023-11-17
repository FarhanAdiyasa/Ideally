<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $guarded = ['id_survey'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pertanyaan_survey()
    {
        return $this->hasMany(Pertanyaan_Survey::class);
    }


    /*protected $fillable = [
        'id_survey',
        'judul_survey',
        'deskripsi_survey',
        'created_date',
        'updated_date',
        'deleted_date',
        
    ];*/

}
