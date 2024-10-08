<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artikel extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'artikels';
    protected $guarded = ['id_artikel'];
    protected $primaryKey = 'id_artikel'; 
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
    public function kategori_artikel()
    {
        return $this->belongsToMany(Kategori_Artikel::class, 'artikel_kategoris', 'id_artikel', 'id_kategori_artikel');
    }    
    public function komentar()
    {
        return $this->hasMany(Komentar::class, 'id_artikel', 'id_artikel');
    }
    public function sumberArtikel()
    {
        return $this->belongsToMany(Sumber_Artikel::class, 'sumber_artikels', 'id_artikel', 'sumber_artikel');
    }
    
    public function ratingArtikel()
    {
        return $this->hasMany(Rating_Artikel::class, 'id_artikel');
    }
    public function scopeByKategori($query, $kategori)
    {
        return $query->whereHas('kategori_artikel', function ($query) use ($kategori) {
            $query->where('nama_kategori_artikel', $kategori);
        });
    }    
    public function scopeFilter($query, array $filter)
    {
        $query->when($filter['sort'] ??  false, function ($query, $sort) {
            return $query->orderBy('tanggal_publikasi', $sort);
        });
        $query->when($filter['search'] ??  false, function ($query, $search) {
            return $query->where('judul_artikel', 'like', '%' . $search . '%')
            ->orWhere('isi_artikel', 'like', '%' . $search . '%')->orWhere('keywords', 'like', '%' . $search . '%');
        });
    }
}
