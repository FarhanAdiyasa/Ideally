<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori_Artikel extends Model
{
    use HasFactory;
    protected $table = 'kategori_artikels';


    protected $guarded = ['id_kategori_artikel'];

    public function artikel()
    {
        return $this->hasMany(Artikel::class);
    }

    /*protected $fillable = [
        'id_kategori_artikel',
        'nama_kategori_artikel',
    ];*/

}
