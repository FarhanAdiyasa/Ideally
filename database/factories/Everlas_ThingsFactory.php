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
      return [
            //

            'seri' => $this->faker->word,
            'nama_produk' => $this->faker->words(2, true),
            'slug' => $this->faker->slug,
            'satuan' => $this->faker->word,
            'jenis' => $this->faker->word,
            'garansi' => $this->faker->word,
            'warna' => $this->faker->colorName,
            'dimensi' => $this->faker->word,
            'material_pendukung' => $this->faker->word,
            'finishing' => $this->faker->word,
            'gambar_1' => $this->faker->imageUrl(),
            'gambar_2' => $this->faker->imageUrl(),
            'gambar_3' => $this->faker->imageUrl(),
            'gambar_4' => $this->faker->imageUrl(),
            'gambar_5' => $this->faker->imageUrl(),
            'gambar_6' => $this->faker->imageUrl(),
            'deskripsi_singkat' => $this->faker->text,
            'stok' => $this->faker->numberBetween(0, 100),
            'item_terjual' => $this->faker->numberBetween(0, 100),
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
