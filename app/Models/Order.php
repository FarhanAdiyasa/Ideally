<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected static function booted()
    {
        static::creating(function ($order) {
            $year = date('y');
            $month = date('m');
            $randomId = str_pad(mt_rand(1, 9999), 4, '0', STR_PAD_LEFT);
            $order->nomor_order = $year . $month . $randomId;
        });
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function nurseris()
    {
        return $this->belongsToMany(Dedikasi_Flora::class, 'dedikasi_floras_order', 'id_order', 'id_nurseri');
    }

    public function batunesias()
    {
        return $this->belongsToMany(Batunesia::class, 'batunesias_order', 'id_order', 'id_batu');
    }

    public function agrigards()
    {
        return $this->belongsToMany(Agrigard::class, 'agrigards_order', 'id_order', 'id_agrigard');
    }

    public function everlasthings()
    {
        return $this->belongsToMany(Everlas_Things::class, 'everlasthings_order', 'id_order', 'id_everlas_things');
    }

    public function konkuritos()
    {
        return $this->belongsToMany(Konkurito::class, 'konkuritos_order', 'id_order', 'id_konkurito');
    }

    public function shineages()
    {
        return $this->belongsToMany(Shineage::class, 'shineages_order', 'id_order', 'id_shineage');
    }


    // Define a relationship with the Testimonial model
    public function testimonies()
    {
        return $this->hasMany(Testimonial::class, 'order_id');
    }
}
