<?php

namespace Database\Factories;
// In your database/factories/ArtikelKategoriFactory.php file

use App\Models\Artikel_Kategori;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class Artikel_KategoriFactory extends Factory
{
    protected $model = Artikel_Kategori::class;

    public function definition()
    {
        return [
            'id_artikel' => $this->faker->numberBetween(1, 100),
            'id_kategori_artikel' => $this->faker->numberBetween(1, 6),
        ];
    }
}

