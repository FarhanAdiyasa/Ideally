<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agrigard extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id_agrigard'];
    protected $primaryKey = 'id_agrigard'; 
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
        return $this->belongsToMany(Promo::class, 'agrigards_promos', 'id_agrigard', 'id_promo');
    }

}
