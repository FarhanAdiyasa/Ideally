<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Promo extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id_promo'];
    protected $primaryKey = 'id_promo'; 
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
    public function agrigards()
    {
        return $this->belongsToMany(Agrigard::class, 'agrigards_promos', 'id_promo', 'id_agrigard');
    }
    public function shineages()
    {
        return $this->belongsToMany(Shineage::class, 'shineages_promos', 'id_promo', 'id_shineage');
    }
    public function konkuritos()
    {
        return $this->belongsToMany(Konkurito::class, 'konkuritos_promos', 'id_promo', 'id_konkurito');
    }
    public function batunesias()
    {
        return $this->belongsToMany(Batunesia::class, 'batunesias_promos', 'id_promo', 'id_batu');
    }
    public function nurseris()
    {
        return $this->belongsToMany(Dedikasi_Flora::class, 'dedikasi_floras_promos', 'id_promo', 'id_nurseri');
    }
    public function everlass()
    {
        return $this->belongsToMany(Everlas_Things::class, 'everlas_things_promos', 'id_promo', 'id_everlas_things');
    }


}
