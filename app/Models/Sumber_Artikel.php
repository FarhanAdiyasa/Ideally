<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sumber_Artikel extends Model
{
    use HasFactory;
    protected $table = 'sumber_artikels';
    protected $guarded = ['id_sumber_artikel'];
    protected $fillable = ['id_artikel', 'sumber_artikel'];
    protected $primaryKey = 'id_sumber_artikel'; 
    protected $with = ['artikel'];

    public function artikel()
    {
        return $this->belongsTo(Sumber_Artikel::class, 'sumber_artikels', 'id_artikel', 'id_sumber_artikel');
    }
}
