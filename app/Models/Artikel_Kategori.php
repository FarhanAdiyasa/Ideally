<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel_Kategori extends Model
{
    use HasFactory;
    protected $table = 'artikel_kategoris';
    protected $primaryKey = 'id';

    protected $guarded = ['id'];

    public function artikel()
    {
        return $this->belongsTo(Artikel::class, 'artikel_kategoris', 'id_kategori_artikel', 'id_artikel');
    }
    public function kategoriArtikel()
    {
        return $this->belongsTo(Kategori_Artikel::class, 'id_kategori_artikel', 'id_kategori_artikel');
    }

}
