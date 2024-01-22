<?php

namespace Database\Factories;

use App\Models\User;
<<<<<<< HEAD
=======
use App\Models\Batunesia;
use Faker\Factory as Faker;

>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class BatunesiaFactory extends Factory
{
    protected $model = Batunesia::class;

    public function definition()
    {
        $faker = Faker::create();
        return [
<<<<<<< HEAD

            'nama_produk' => $this->faker->words,
            'slug' => [$this->faker->slug],
            'kategori' => [$this->faker->word],
=======
            'nama_produk' => $this->faker->words(3, true), // Menggunakan words() untuk mendapatkan kalimat
            'slug' => $this->faker->slug,
            'kategori' => $this->faker->word,
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
            'panjang' => $this->faker->randomFloat(2, 1, 100),
            'lebar' => $this->faker->randomFloat(2, 1, 100),
            'diameter' => $this->faker->randomFloat(2, 1, 100),
            'tinggi' => $this->faker->randomFloat(2, 1, 100),
            'satuan' => $this->faker->word,
            'warna_1' => $this->faker->colorName,
            'warna_2' => $this->faker->colorName,
            'gambar_1' => $this->faker->imageUrl(),
            'gambar_2' => $this->faker->imageUrl(),
            'gambar_3' => $this->faker->imageUrl(),
            'video' => $this->faker->optional()->url,
            'armada_minimum' => $this->faker->word,
            'stok' => $this->faker->randomNumber(2),
            'item_terjual' => $this->faker->randomNumber(2),
            'berat_gram' => $this->faker->numberBetween(0, 100),
            'penempatan' => $this->faker->word,
            'deskripsi_singkat' => $this->faker->paragraph,
            'harga_jual_projek_ideally' => $this->faker->randomFloat(2, 10, 300) * 1000,
            'harga_b2I_31_unit' => $this->faker->randomFloat(2, 10, 300) * 1000,
            'harga_b2I_11_unit' => $this->faker->randomFloat(2, 10, 300) * 1000,
            'harga_b2I_1_unit' => $this->faker->randomFloat(2, 10, 300) * 1000,
            'harga_b2B_31_unit' => $this->faker->randomFloat(2, 10, 300) * 1000,
            'harga_b2B_11_unit' => $this->faker->randomFloat(2, 10, 300) * 1000,
            'harga_b2B_1_unit' => $this->faker->randomFloat(2, 10, 300) * 1000,
            'harga_b2C_31_unit' => $this->faker->randomFloat(2, 10, 300) * 1000,
            'harga_b2C_11_unit' => $this->faker->randomFloat(2, 10, 300) * 1000,
            'harga_b2C_1_unit' => $this->faker->randomFloat(2, 10, 300) * 1000,
            'tanggal_publikasi' => $this->faker->optional()->dateTimeThisYear,
            'created_by' => $this->faker->numberBetween(1, 5),
        ];
        
    }
}