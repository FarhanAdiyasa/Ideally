<?php

namespace App\Models;

use Database\Factories\DefloFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dedikasi_Flora extends Model
{
    use HasFactory;

    protected $guarded = ['id_nurseri'];
    protected $table = "dedikasi_floras";
    protected $primaryKey = 'id_nurseri'; 
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
        return $this->belongsToMany(Promo::class, 'dedikasi_floras_promos', 'id_nureseri', 'id_promo');
    }

    public function orders() {
        return $this->belongsToMany(Order::class, 'dedikasi_floras_orders', 'id_nurseri', 'id_order');
    }

    // protected $fillable = [
    //     'id_nurseri',
    //     'nama_latin',
    //     'nama_lokal',
    //     'deskripsi_singkat',
    //     'slug',
    //     'tinggi',
    //     'satuan',
    //     'diameter_tajuk',
    //     'strata',
    //     'warna_daun',
    //     'warna_bunga',
    //     'penyiraman',
    //     'penyinaran',
    //     'pemupukan',
    //     'gambar_1',
    //     'gambar_2',
    //     'gambar_3',
    //     'video',
    //     'stok',
    //     'item_terjual',
    //     'hpp',
    //     'harga_b2I_31',
    //     'harga_b2I_11',
    //     'harga_b2I_1',
    //     'harga_b2B_31',
    //     'harga_b2B_11',
    //     'harga_b2B_1',
    //     'harga_b2C_31',
    //     'harga_b2C_11',
    //     'harga_b2C_1',
    //     'tanggal_publikasi',
    //     'created_at',
    //     'updated_at',
    //     'deleted_at',
    // ];

}
