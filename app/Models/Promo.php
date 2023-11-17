<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;

    protected $guarded = ['id_promo'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    /*protected $fillable = [
        'id_promo',
        'judul_promo',
        'deskripsi_promo',
        'tanggal_mulai',
        'tanggal_selesai',
        'created_at',
        'updated_at',
        'satuan_potongan',
        'jumlah_potongan',
    ];*/

}
