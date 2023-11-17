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
            'nama_produk' => $faker->word,
            'slug' => $faker->slug,
            'jenis' => $faker->word,
            'spesifikasi' => $faker->text,
            'satuan' => $faker->word,
            'garansi' => $faker->word,
            'warna_1' => $faker->colorName,
            'warna_2' => $faker->colorName,
            'dimensi' => $faker->word,
            'gambar_1' => $faker->imageUrl(),
            'gambar_2' => $faker->imageUrl(),
            'gambar_3' => $faker->imageUrl(),
            'gambar_4' => $faker->imageUrl(),
            'gambar_5' => $faker->imageUrl(),
            'video' => $faker->url,
            'stok' => $faker->numberBetween(0, 100),
            'item_terjual' => $faker->numberBetween(0, 100),
            'deskripsi_singkat' => $faker->text,
            'hpp' => $faker->randomFloat(2, 10, 100),
            'harga_b2I_11+_unit' => $faker->randomFloat(2, 10, 100),
            'harga_b2I_1+_unit' => $faker->randomFloat(2, 10, 100),
            'harga_b2B_11+_unit' => $faker->randomFloat(2, 10, 100),
            'harga_b2B_1+_unit' => $faker->randomFloat(2, 10, 100),
            'harga_b2C_11+_unit' => $faker->randomFloat(2, 10, 100),
            'harga_b2C_1+_unit' => $faker->randomFloat(2, 10, 100),
            'tanggal_publikasi' => $faker->dateTimeThisMonth,
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null,
            'created_by' => function () {
                return factory(App\User::class)->create()->user_id;
            },
            'updated_by' => function () {
                return factory(App\User::class)->create()->user_id;
            },
            'deleted_by' => function () {
                return factory(App\User::class)->create()->user_id;
            },
        ];
    }
}
