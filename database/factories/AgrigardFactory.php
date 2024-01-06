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

            'kategori' =>$this->faker->word,
            'nama_produk' =>$this->faker->words(2, true),
            'slug' =>$this->faker->slug,
            'satuan' =>$this->faker->word,
            'spesifikasi' =>$this->faker->word,
            'gambar_1' =>'photos/contoh.png',
            'gambar_2' =>'photos/contoh.png',
            'gambar_3' =>'photos/contoh.png',
            'video' =>$this->faker->url,
            'deskripsi_singkat' =>$this->faker->text,
            'stok' =>$this->faker->numberBetween(0, 100),
            'item_terjual' =>$this->faker->numberBetween(0, 100),
            'berat' => $this->faker->numberBetween(0, 100),
            'armada_minimum' =>$this->faker->word,
            'harga_jual_projek_ideally' =>$this->faker->randomFloat(2, 10, 100),
            'harga_b2I_31_unit' =>$this->faker->randomFloat(2, 10, 100),
            'harga_b2I_11_unit' =>$this->faker->randomFloat(2, 10, 100),
            'harga_b2I_1_unit' =>$this->faker->randomFloat(2, 10, 100),
            'harga_b2B_31_unit' =>$this->faker->randomFloat(2, 10, 100),
            'harga_b2B_11_unit' =>$this->faker->randomFloat(2, 10, 100),
            'harga_b2B_1_unit' =>$this->faker->randomFloat(2, 10, 100),
            'harga_b2C_31_unit' =>$this->faker->randomFloat(2, 10, 100),
            'harga_b2C_11_unit' =>$this->faker->randomFloat(2, 10, 100),
            'harga_b2C_1_unit' =>$this->faker->randomFloat(2, 10, 100),
            'tanggal_publikasi' =>$this->faker->dateTimeThisMonth,
            'created_at' => now(),
            'created_by' => $this->faker->numberBetween(1, 5)
        ];
    }
}
