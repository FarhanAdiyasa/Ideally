<?php

namespace Database\Factories;
// factories/PromoFactory.php
use App\Models\Promo;
use App\Models\DedikasiFlora;
use App\Models\Batunesia;
use App\Models\Konkurito;
use App\Models\EverlasThing;
use App\Models\Shineage;
use App\Models\Agrigard;
use App\Models\Dedikasi_Flora;
use App\Models\Everlas_Things;
use Illuminate\Database\Eloquent\Factories\Factory;

class PromoFactory extends Factory
{
    protected $model = Promo::class;

    public function definition()
    {
        return [
            'nama_promo' => $this->faker->words(2, true),
            'jenis_promo' => $this->faker->randomElement(['Brand', 'Produk']), // Sesuaikan dengan jenis promo yang diinginkan
            'target_promo_b2i' => $this->faker->boolean,
            'target_promo_b2c' => $this->faker->boolean,
            'target_promo_b2b' => $this->faker->boolean,
            'tipe_promo' => $this->faker->randomElement(['diskon', 'cashback']),
            'tipe_potongan' => $this->faker->randomElement(['nominal', 'persentase']),
            'persentase_promo' => $this->faker->randomFloat(2, 0, 100),
            'nominal_promo' => $this->faker->randomNumber(4),
            'minimum_pembelian' => $this->faker->randomNumber(3),
            'kuota' => $this->faker->randomNumber(2),
            'tanggal_mulai' => $this->faker->dateTimeBetween('now', '+1 week'),
            'tanggal_selesai' => $this->faker->dateTimeBetween('+2 weeks', '+4 weeks'),
            'tanggal_publikasi' => $this->faker->boolean ? $this->faker->dateTimeBetween('-1 week', 'now') : null,
            'created_by' => 1, // Sesuaikan dengan user ID yang diinginkan
        ];
    }
    
}
