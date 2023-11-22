<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    protected $table = 'artikels';
    protected $guarded = ['id_artikel'];
    protected $with = ['createdBy'];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by', 'user_id');
    }

    public function kategori_artikel()
    {
        return $this->belongsTo(Kategori_Artikel::class);
    }

    public function detail()
    {
        return $this->hasOne(detail_komentar::class);
    }

    public function scopeFilter($query, array $filter)
    {

        $query->when($filter['filter_artikel_onKategori'] ??  false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%');
            });
        });

        $query->when($filter['category'] ??  false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when(
            $filter['author'] ??  false,
            fn ($query, $author) =>
            $query->whereHas('author', fn ($query) =>
            $query->where('username', $author))
        );
    }
}