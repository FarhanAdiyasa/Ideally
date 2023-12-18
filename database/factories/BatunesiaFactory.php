<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Batunesia>
 */
class BatunesiaFactory extends Factory
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
            'nama_produk' => $faker->words(2, true),
            'slug' => $faker->slug,
            'kategori' => $faker->randomElement(['Batu Hias', 'Batu Hampar', 'Ornamen Batu', 'Batu Tempel']),
            'spek' => $faker->word,
            'satuan' => $faker->word,
            'warna' => $faker->colorName,
            'gambar_1' => $faker->imageUrl(),
            'gambar_2' => $faker->imageUrl(),
            'gambar_3' => $faker->imageUrl(),
            'video' => $faker->url,
            'stok' => $faker->numberBetween(0, 100),
            'item_terjual' => $faker->numberBetween(0, 100),
            'deskripsi_singkat' => $faker->text,
            'hpp' => 90000, 
            'harga_b2I_31+_unit' => 90000,
            'harga_b2I_11+_unit' => 90000, 
            'harga_b2I_1+_unit' => 90000,
            'harga_b2B_31+_unit' => 90000,
            'harga_b2B_11+_unit' => 90000,
            'harga_b2B_1+_unit' => 90000, 
            'harga_b2C_31+_unit' => 90000,
            'harga_b2C_11+_unit' => 90000,
            'harga_b2C_1+_unit' => 90000,
            'tanggal_publikasi' => $faker->dateTimeThisMonth,
            'created_by' => User::factory()->create()->id,
            'updated_by' => User::factory()->create()->id,
            'deleted_by' => User::factory()->create()->id,
        ];
        
    }
}