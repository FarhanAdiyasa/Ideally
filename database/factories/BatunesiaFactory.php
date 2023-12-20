<?php

namespace Database\Factories;

use App\Models\Batunesia;
use Illuminate\Database\Eloquent\Factories\Factory;

class BatunesiaFactory extends Factory
{
    protected $model = Batunesia::class;

    public function definition()
    {
        return [
            'nama_produk' => $this->faker->words,
            'slug' => [$this->faker->slug],
            'kategori' => [$this->faker->word],
            'panjang' => $this->faker->randomFloat(2, 1, 100),
            'lebar' => $this->faker->randomFloat(2, 1, 100),
            'diameter' => $this->faker->randomFloat(2, 1, 100),
            'tinggi' => $this->faker->randomFloat(2, 1, 100),
            'satuan' => [$this->faker->word],
            'warna_1' => $this->faker->colorName,
            'warna_2' => $this->faker->optional()->colorName,
            'gambar_1' => [$this->faker->imageUrl()],
            'gambar_2' => [$this->faker->imageUrl()],
            'gambar_3' => [$this->faker->imageUrl()],
            'video' => [$this->faker->optional()->url],
            'armada_minimum' => [$this->faker->word],
            'stok' => [$this->faker->randomNumber(2)],
            'item_terjual' => [$this->faker->randomNumber(2)],
            'penempatan' => $this->faker->word,
            'deskripsi_singkat' => [$this->faker->paragraph],
            'harga_b2I_31_unit' => [$this->faker->randomFloat(2, 10, 1000)],
            'harga_b2I_11_unit' => [$this->faker->randomFloat(2, 10, 1000)],
            'harga_b2I_1_unit' => [$this->faker->randomFloat(2, 10, 1000)],
            'harga_b2B_31_unit' => [$this->faker->randomFloat(2, 10, 1000)],
            'harga_b2B_11_unit' => [$this->faker->randomFloat(2, 10, 1000)],
            'harga_b2B_1_unit' => [$this->faker->randomFloat(2, 10, 1000)],
            'harga_b2C_31_unit' => [$this->faker->randomFloat(2, 10, 1000)],
            'harga_b2C_11_unit' => [$this->faker->randomFloat(2, 10, 1000)],
            'harga_b2C_1_unit' => [$this->faker->randomFloat(2, 10, 1000)],
            'tanggal_publikasi' => [$this->faker->optional()->dateTimeThisYear],
            'created_by' => [$this->faker->numberBetween(1, 5)]
        ];
    }
}
