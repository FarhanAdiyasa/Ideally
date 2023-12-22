<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating_Artikel extends Model
{
    use HasFactory;
    protected $table = 'rating_artikels';
    protected $guarded = ['id_rating_artikel'];
    protected $primaryKey = 'id_rating_artikel'; 
    protected $with = ['artikel', 'user'];
    public function artikel()
    {
        return $this->belongsTo(Artikel::class, 'id_artikel');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_artikel');
    }
}
