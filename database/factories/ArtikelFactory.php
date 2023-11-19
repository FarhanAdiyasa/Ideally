<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artikel>
 */
class ArtikelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'judul_artikel' => $this->faker->sentence,
            'slug' => Str::slug($this->faker->sentence),
            'deskripsi_artikel' => $this->faker->paragraph,
            'isi_artikel' => $this->faker->text,
            'penulis_artikel' => $this->faker->name,
            'gambar_artikel' => $this->faker->imageUrl(),
            'keywords' => $this->faker->words(3, true),
            'tanggal_publikasi' => $this->faker->dateTimeThisMonth,
            'created_by' => $this->faker->numberBetween(1, 10),
            'updated_by' => $this->faker->numberBetween(1, 10),
            'deleted_by' => null, // assuming it can be null
            'id_kategori_artikel' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
