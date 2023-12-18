<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Everlas_Things>
 */
class Everlas_ThingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create();
        return [
            //

            'seri' => $faker->word,
            'nama_produk' => $faker->words(2, true),
            'slug' => $faker->slug,
            'satuan' => $faker->word,
            'jenis' => $faker->word,
            'garansi' => $faker->word,
            'warna' => $faker->colorName,
            'dimensi' => $faker->word,
            'material_pendukung' => $faker->word,
            'finishing' => $faker->word,
            'gambar_1' => $faker->imageUrl(),
            'gambar_2' => $faker->imageUrl(),
            'gambar_3' => $faker->imageUrl(),
            'gambar_4' => $faker->imageUrl(),
            'gambar_5' => $faker->imageUrl(),
            'gambar_6' => $faker->imageUrl(),
            'deskripsi_singkat' => $faker->text,
            'stok' => $faker->numberBetween(0, 100),
            'item_terjual' => $faker->numberBetween(0, 100),
            'hpp' => $faker->randomFloat(2, 10, 100),
            'harga_b2I_11+_unit' => 1700000,
            'harga_b2I_1+_unit' => 1700000,
            'harga_b2B_11+_unit' => 1700000,
            'harga_b2B_1+_unit' => 1700000,
            'harga_b2C_11+_unit' => 1700000,
            'harga_b2C_1+_unit' => 1700000,
            'tanggal_publikasi' => $faker->dateTimeThisMonth,
            'created_at' => now(),
            'updated_at' => now(),
            'created_by' => User::factory()->create()->user_id,
            'updated_by' => User::factory()->create()->user_id,
            'deleted_by' => User::factory()->create()->user_id,
        ];
    }
}
