<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konkurito extends Model
{
    use HasFactory;

    protected $guarded = ['id_konkurito'];
    protected $primaryKey = 'id_konkurito'; 
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

    public function promos()
    {
        return $this->belongsToMany(Promo::class, 'konkuritos_promos', 'id_konkurito', 'id_promo');
    }

}
