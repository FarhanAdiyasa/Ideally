<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract; // Ganti use statement

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'users';
    protected $primaryKey = 'user_id'; 
    
    // protected $fillable = [
    //     'user_id','email','password', 'google_id','firstname','lastname','address','telephone_number','birthdate','gender', 'profesi','provinsi','kabupaten','kelurahan','kecamatan'
    // ];

    protected $guarded = [
        'user_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function komentar()
    {
        return $this->hasOne(Komentar::class);
    }
    public function ratingArtikel()
    {
        return $this->hasMany(Rating_Artikel::class, 'user_id');
    }
    public function artikel()
    {
        return $this->hasOne(Artikel::class);
    }

    public function survey()
    {
        return $this->hasOne(Survey::class);
    }

    public function jawaban_survey()
    {
        return $this->hasOne(Jawaban_Survey::class);
    }

    public function pertanyaan_survey()
    {
        return $this->hasOne(Pertanyaan_Survey::class);
    }

    public function dedikasi_flora()
    {
        return $this->hasOne(Dedikasi_Flora::class);
    }

    public function everlas_things()
    {
        return $this->hasOne(Everlas_Things::class);
    }

    public function promo()
    {
        return $this->hasOne(Promo::class);
    }

    public function shineage()
    {
        return $this->hasOne(Shineage::class);
    }

    public function konkurito()
    {
        return $this->hasOne(Konkurito::class);
    }

    public function batunesia()
    {
        return $this->hasOne(Batunesia::class);
    }

    public function agrigard()
    {
        return $this->hasOne(Agrigard::class);
    }
    public function scopeCountCreated($query, $startDate, $endDate)
    {
        return $query->whereBetween('created_at', [$startDate, $endDate])->count();
    }

    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmail($this));
    }
}
