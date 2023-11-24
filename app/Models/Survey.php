<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $guarded = ['id_survey'];

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
