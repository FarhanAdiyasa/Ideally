<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agrigard extends Model
{
    use HasFactory;

    protected $guarded = ['id_agrigard'];

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



    /*
    protected $fillable = [
        'id_agrigard',
        'kategori',
        'nama_produk',
        'slug',
        'satuan',
        'gambar_1',
        'gambar_2',
        'gambar_3',
        'video',
        'deskripsi_singkat',
        'stok',
        'item_terjual',
        'hpp',
        'harga_b2I_31+_unit',
        'harga_b2I_11+_unit',
        'harga_b2I_1+_unit',
        'harga_b2B_31+_unit',
        'harga_b2B_11+_unit',
        'harga_b2B_1+_unit',
        'harga_b2C_31+_unit',
        'harga_b2C_11+_unit',
        'harga_b2C_1+_unit',
        'tanggal_publikasi',
        'created_at',
        'updated_at',
        'deleted_at',
    ];*/



}
