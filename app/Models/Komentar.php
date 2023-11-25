<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;

    protected $guarded = ['id_komentar'];

    protected $with = ['createdBy', 'updatedBy', 'deletedBy', 'artikel'];

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

    public function artikel()
    {
        return $this->belongsTo(Artikel::class, 'id_artikel', 'id_artikel');
    }


    /*protected $fillable = [
        'id_komentar',
        'isi_komentar',
        'created_at',
        'updated_at',
        'deleted_at',
    ];*/

}
