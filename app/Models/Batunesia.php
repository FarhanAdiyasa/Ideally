<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batunesia extends Model
{
    use HasFactory;

    protected $guarded = ['id_batu'];
    protected $primaryKey = 'id_batu';
    protected $table = "batunesias";
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
        return $this->belongsToMany(Promo::class, 'batunesias_promos', 'id_batu', 'id_promo');
    }

    public function orders() {
        return $this->belongsToMany(Order::class, 'batunesias_orders', 'id_batu', 'id_order');
    }

}
