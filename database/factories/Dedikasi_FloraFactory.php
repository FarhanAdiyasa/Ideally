<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dedikasi_Flora>
 */
class Dedikasi_FloraFactory extends Factory
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

            'nama_latin' => $this->faker->word,
            'nama_lokal' => $this->faker->words(2, true),
            'deskripsi_singkat' => $this->faker->text,
            'slug' => $this->faker->slug,
            'tinggi' => $this->faker->numberBetween(1, 100),
            'satuan' => $this->faker->word,
            'diameter_tajuk' => $this->faker->numberBetween(1, 100),
            'strata' => $this->faker->word,
            'warna_daun' => $this->faker->colorName,
            'warna_bunga' => $this->faker->colorName,
            'penyiraman' => $this->faker->word,
            'penyinaran' => $this->faker->word,
            'pemupukan' => $this->faker->word,
            'gambar_1' => 'photos/contoh.png',
            'gambar_2' => 'photos/contoh.png',
            'gambar_3' => 'photos/contoh.png',
            'video' => $this->faker->url,
            'stok' => $this->faker->numberBetween(0, 100),
            'item_terjual' => $this->faker->numberBetween(0, 100),
            'harga_b2I_31_unit' => $this->faker->randomFloat(2, 10, 100),
            'harga_b2I_11_unit' => $this->faker->randomFloat(2, 10, 100),
            'harga_b2I_1_unit' => $this->faker->randomFloat(2, 10, 100),
            'harga_b2B_31_unit' => $this->faker->randomFloat(2, 10, 100),
            'harga_b2B_11_unit' => $this->faker->randomFloat(2, 10, 100),
            'harga_b2B_1_unit' => $this->faker->randomFloat(2, 10, 100),
            'harga_b2C_31_unit' => $this->faker->randomFloat(2, 10, 100),
            'harga_b2C_11_unit' => $this->faker->randomFloat(2, 10, 100),
            'harga_b2C_1_unit' => $this->faker->randomFloat(2, 10, 100),
            'tanggal_publikasi' => $this->faker->dateTimeThisMonth,
            'created_at' => now(),
            'created_by' => $this->faker->numberBetween(1, 5)
        ];
    }
}
