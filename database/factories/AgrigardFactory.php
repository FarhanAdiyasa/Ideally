<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agrigard>
 */
class AgrigardFactory extends Factory
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

            'kategori' => $faker->word,
            'nama_produk' => $faker->words(2, true),
            'slug' => $faker->slug,
            'satuan' => $faker->word,
            'gambar_1' => $faker->imageUrl(),
            'gambar_2' => $faker->imageUrl(),
            'gambar_3' => $faker->imageUrl(),
            'video' => $faker->url,
            'deskripsi_singkat' => $faker->text,
            'stok' => $faker->numberBetween(0, 100),
            'item_terjual' => $faker->numberBetween(0, 100),
            'hpp' => $faker->randomFloat(2, 10, 100),
            'harga_b2I_31+_unit' => $faker->randomFloat(2, 10, 100),
            'harga_b2I_11+_unit' => $faker->randomFloat(2, 10, 100),
            'harga_b2I_1+_unit' => $faker->randomFloat(2, 10, 100),
            'harga_b2B_31+_unit' => $faker->randomFloat(2, 10, 100),
            'harga_b2B_11+_unit' => $faker->randomFloat(2, 10, 100),
            'harga_b2B_1+_unit' => $faker->randomFloat(2, 10, 100),
            'harga_b2C_31+_unit' => $faker->randomFloat(2, 10, 100),
            'harga_b2C_11+_unit' => $faker->randomFloat(2, 10, 100),
            'harga_b2C_1+_unit' => $faker->randomFloat(2, 10, 100),
            'tanggal_publikasi' => $faker->dateTimeThisMonth,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
