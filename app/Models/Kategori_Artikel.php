<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori_Artikel extends Model
{
    use HasFactory;
    protected $table = 'kategori_artikels';
    protected $primaryKey = 'id_kategori_artikel';

    protected $guarded = ['id_kategori_artikel'];

    public function kategori_artikel()
    {
        return $this->belongsToMany(Artikel::class, 'artikel_kategoris', 'id_kategori_artikel', 'id_artikel');
    }

    /*protected $fillable = [
        'id_kategori_artikel',
        'nama_kategori_artikel',
    ];*/

}
