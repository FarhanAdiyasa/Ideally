<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Everlas_Things extends Model
{
    use HasFactory;
protected $table = 'everlas_things';
    protected $guarded = ['id_everlas_things'];
    protected $primaryKey = 'id_everlas_things'; 
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
        return $this->belongsToMany(Promo::class, 'everlas_things_promos', 'id_everlas_things', 'id_promo');
    }

    public function orders() {
        return $this->belongsToMany(Order::class, 'everlas_things_orders', 'id_everlas_things', 'id_order');
    }
}
