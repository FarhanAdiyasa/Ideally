<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shineage>
 */
class ShineageFactory extends Factory
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
            'seri' => $faker->word,
        'nama_produk' => $faker->words(2, true),
        'slug' => $faker->slug,
        'jenis' => $faker->word,
        'garansi' => $faker->word,
        'warna' => $faker->word,
        'dimensi' => $faker->word,
        'material_pendukung' => $faker->word,
        'finishing' => $faker->word,
        'gambar_1' => $faker->imageUrl(),
        'gambar_2' => $faker->imageUrl(),
        'gambar_3' => $faker->imageUrl(),
        'gambar_4' => $faker->imageUrl(),
        'gambar_5' => $faker->imageUrl(),
        'gambar_6' => $faker->imageUrl(),
        'video' => $faker->url,
        'deskripsi_singkat' => $faker->text,
        'stok' => $faker->numberBetween(0, 100),
        'item_terjual' => $faker->numberBetween(0, 100),
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
