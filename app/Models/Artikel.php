<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Artikel extends Model
{
    use HasFactory;
    protected $table = 'artikels';
    protected $guarded = ['id_artikel'];
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
        return $this->belongsTo(Kategori_Artikel::class, 'id_kategori_artikel', 'id_kategori_artikel');
    }
    

    public function detail()
    {
        return $this->hasOne(detail_komentar::class);
    }
    public function scopeKategori($query, $filter = [])
    {
        $query->when($filter['kategori'] ?? false, function ($query, $kategori) {
            return $query->whereHas('kategori_artikel', function ($query) use ($kategori) {
                $query->where('nama_kategori_artikel', $kategori);
            });
        });
    }
    
    public function scopeFilter($query, array $filter)
    {
        $query->when($filter['filter_artikel_onKategori'] ??  false, function ($query, $filter_artikel_onKategori) {
            return $query->orderBy('tanggal_publikasi', $filter_artikel_onKategori);
        });
        $query->when($filter['cari_artikel_onKategori'] ??  false, function ($query, $cari_artikel_onKategori) {
            return $query->where('judul_artikel', 'like', '%' . $cari_artikel_onKategori . '%')
            ->orWhere('isi_artikel', 'like', '%' . $cari_artikel_onKategori . '%');
        });
    }
}
