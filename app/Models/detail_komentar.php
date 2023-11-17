<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_komentar extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function artikel()
    {
        return $this->belongsTo(Artikel::class);
    }

    public function komentar()
    {
        return $this->belongsTo(Komentar::class);
    }
}
