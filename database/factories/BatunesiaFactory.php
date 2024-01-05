<?php

namespace Database\Factories;

use App\Models\Batunesia;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class BatunesiaFactory extends Factory
{
    protected $model = Batunesia::class;

    public function definition()
    {
        $faker = Faker::create();
        return [
            'nama_produk' => $faker->words(3, true), // Menggunakan words() untuk mendapatkan kalimat
            'slug' => $faker->slug,
            'kategori' => $faker->word,
            'panjang' => $faker->randomFloat(2, 1, 100),
            'lebar' => $faker->randomFloat(2, 1, 100),
            'diameter' => $faker->randomFloat(2, 1, 100),
            'tinggi' => $faker->randomFloat(2, 1, 100),
            'satuan' => $faker->word,
            'warna_1' => $faker->colorName,
            'warna_2' => $faker->colorName,
            'gambar_1' => $faker->imageUrl(),
            'gambar_2' => $faker->imageUrl(),
            'gambar_3' => $faker->imageUrl(),
            'video' => $faker->optional()->url,
            'armada_minimum' => $faker->word,
            'stok' => $faker->randomNumber(2),
            'item_terjual' => $faker->randomNumber(2),
            'penempatan' => $faker->word,
            'deskripsi_singkat' => $faker->paragraph,
            'harga_jual_projek_ideally' => $faker->randomFloat(2, 10, 1000),
            'harga_b2I_31_unit' => $faker->randomFloat(2, 10, 1000),
            'harga_b2I_11_unit' => $faker->randomFloat(2, 10, 1000),
            'harga_b2I_1_unit' => $faker->randomFloat(2, 10, 1000),
            'harga_b2B_31_unit' => $faker->randomFloat(2, 10, 1000),
            'harga_b2B_11_unit' => $faker->randomFloat(2, 10, 1000),
            'harga_b2B_1_unit' => $faker->randomFloat(2, 10, 1000),
            'harga_b2C_31_unit' => $faker->randomFloat(2, 10, 1000),
            'harga_b2C_11_unit' => $faker->randomFloat(2, 10, 1000),
            'harga_b2C_1_unit' => $faker->randomFloat(2, 10, 1000),
            'tanggal_publikasi' => $faker->optional()->dateTimeThisYear,
            'created_by' => $faker->numberBetween(1, 5),
        ];
    }
}
