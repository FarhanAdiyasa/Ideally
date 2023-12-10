<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sumber_Artikel extends Model
{
    use HasFactory;
    protected $table = 'sumber_artikels';
    protected $guarded = ['id_sumber_artikel'];
    protected $primaryKey = 'id_sumber_artikel'; 
    protected $with = ['artikel'];

    public function artikel()
    {
        return $this->belongsTo(Artikel::class, 'id_artikel');
    }
}
