<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;

    protected $guarded = ['id_promo'];

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
