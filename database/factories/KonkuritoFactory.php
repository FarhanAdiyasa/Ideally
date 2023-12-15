<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Konkurito>
 */
class KonkuritoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nama_produk' => $this->faker->word,
            'slug' => $this->faker->slug,
            'jenis' => $this->faker->word,
            'spesifikasi' => $this->faker->text,
            'satuan' => $this->faker->word,
            'garansi' => $this->faker->word,
            'warna_1' => $this->faker->colorName,
            'warna_2' => $this->faker->colorName,
            'dimensi' => $this->faker->word,
            'gambar_1' => $this->faker->imageUrl(),
            'gambar_2' => $this->faker->imageUrl(),
            'gambar_3' => $this->faker->imageUrl(),
            'gambar_4' => $this->faker->imageUrl(),
            'gambar_5' => $this->faker->imageUrl(),
            'video' => $this->faker->url,
            'stok' => $this->faker->numberBetween(0, 100),
            'item_terjual' => $this->faker->numberBetween(0, 100),
            'deskripsi_singkat' => $this->faker->text,
            'harga_b2I_11_unit' => $this->faker->randomFloat(2, 10, 100),
            'harga_b2I_1_unit' => $this->faker->randomFloat(2, 10, 100),
            'harga_b2B_11_unit' => $this->faker->randomFloat(2, 10, 100),
            'harga_b2B_1_unit' => $this->faker->randomFloat(2, 10, 100),
            'harga_b2C_11_unit' => $this->faker->randomFloat(2, 10, 100),
            'harga_b2C_1_unit' => $this->faker->randomFloat(2, 10, 100),
            'tanggal_publikasi' => $this->faker->dateTimeThisMonth,
            'created_at' => now(),
            'created_by' => $this->faker->numberBetween(1, 5)
        ];
    }
}
