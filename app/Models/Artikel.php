<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $guarded = ['id_artikel'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kategori_artikel()
    {
        return $this->belongsTo(Kategori_Artikel::class);
    }

    public function detail()
    {
        return $this->hasOne(detail_komentar::class);
    }

    
    /*protected $fillable = [
        'id_artikel',
        'judul_artikel',
        'slug',
        'deskripsi_artikel',
        'isi_artikel',
        'penulis_artikel',
        'gambar_artikel',
        'keywords',
        'tanggal_publikasi',
        'created_at',
        'updated_at',
        'deleted_at',
    ];*/

}
