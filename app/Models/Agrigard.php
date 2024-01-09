<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agrigard extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id_agrigard'];
    protected $primaryKey = 'id_agrigard'; 
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
        return $this->belongsToMany(Promo::class, 'agrigards_promos', 'id_agrigard', 'id_promo');
    }

    // protected $fillable = [
    //     'kategori',
    //     'nama_produk',
    //     'slug',
    //     'spesifikasi',
    //     'satuan',
    //     'gambar_1',
    //     'gambar_2',
    //     'gambar_3',
    //     'gambar_4',
    //     'video',
    //     'deskripsi_singkat',
    //     'stok',
    //     'item_terjual',
    //     'harga_b2I_31_unit',
    //     'harga_b2I_11_unit',
    //     'harga_b2I_1_unit',
    //     'harga_b2B_31_unit',
    //     'harga_b2B_11_unit',
    //     'harga_b2B_1_unit',
    //     'harga_b2C_31_unit',
    //     'harga_b2C_11_unit',
    //     'harga_b2C_1_unit',
    //     'tanggal_publikasi',
    //     'created_by',
    //     'updated_by',
    //     'deleted_by',
    // ];
}
