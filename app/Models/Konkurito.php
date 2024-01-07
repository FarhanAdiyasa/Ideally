<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konkurito extends Model
{
    use HasFactory;

    protected $guarded = ['id_konkurito'];
    protected $primaryKey = 'id_konkurito'; 
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
        return $this->belongsToMany(Promo::class, 'konkuritos_promos', 'id_konkurito', 'id_promo');
    }

    protected $fillable = [
        'id_konkurito',
        'nama_produk',
        'slug',
        'jenis',
        'spesifikasi',
        'satuan',
        'garansi',
        'warna_1',
        'warna_2',
        'dimensi',
        'gambar',
        'video',
        'stok',
        'item_terjual',
        'deskripsi_singkat',
        'hpp',
        'harga_b2I_11',
        'harga_b2I_1',
        'harga_b2B_11',
        'harga_b2B_1',
        'harga_b2C_11',
        'harga_b2C_1',
        'harga_b2C_31',
        'tanggal_publikasi',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
