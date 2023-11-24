<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan_Survey extends Model
{
    use HasFactory;

    protected $guarded = ['id_pertanyaan_survey'];

    protected $with = ['createdBy', 'updatedBy', 'deletedBy'];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by', 'user_id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by', 'user_id');
    }

    public function deletedBy()
    {
        return $this->belongsTo(User::class, 'deleted_by', 'user_id');
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
