<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'nomor_order', 'status', '_token'];

    protected static function booted()
    {
        static::creating(function ($order) {
            $year = date('y');
            $month = date('m');
            $randomId = str_pad(mt_rand(1, 9999), 4, '0', STR_PAD_LEFT);
            $order->nomor_order = $year . $month . $randomId;
        });
    }


    public function nurseris()
    {
        return $this->belongsToMany(Dedikasi_Flora::class, 'dedikasi_floras_order', 'id_order', 'id_nurseri');
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
