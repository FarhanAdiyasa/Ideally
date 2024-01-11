<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    public function deflos() {
        return $this->belongsToMany(Dedikasi_Flora::class, 'order_deflos');
    }

    public function agrigards() {
        return $this->belongsToMany(Agrigard::class, 'order_agrigards');
    }

    public function batunesias() {
        return $this->belongsToMany(Batunesia::class, 'order_batunesias');
    }

    public function everlas_thingss() {
        return $this->belongsToMany(Everlas_Things::class, 'order_everlas_things');
    }

}
