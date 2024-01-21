<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    protected $fillable = ['user_id', 'total_harga', 'biaya_ongkir', 'grand_total', 'bank', 'status_pembayaran', 'status_pesanan'];

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
        return $this->belongsToMany(Dedikasi_Flora::class, 'dedikasi_floras_orders', 'id_order', 'id_nurseri');
    }


    public function agrigards() {
        return $this->belongsToMany(Agrigard::class, 'agrigards_orders', 'id_order', 'id_agrigard');
    }

    public function batunesias() {
        return $this->belongsToMany(Batunesia::class, 'batunesias_orders', 'id_order', 'id_batu');
    }

    public function everlas_things() {
        return $this->belongsToMany(Everlas_Things::class, 'everlas_things_orders', 'id_order', 'id_everlas_things');
    }

    public function konkuritos() {
        return $this->belongsToMany(Konkurito::class, 'konkuritos_orders', 'id_order', 'id_konkurito');
    }

    public function shineages() {
        return $this->belongsToMany(Shineage::class, 'shineages_orders', 'id_order', 'id_shineage');
    }
  
    // Define a relationship with the Testimonial model
    public function testimonies()
    {
        return $this->hasMany(Testimonial::class, 'order_id');
    }
}
