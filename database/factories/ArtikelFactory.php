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
            'isi_artikel' => collect($this->faker->paragraphs(mt_rand(10, 15)))
            ->prepend("<h5>Your H5 Title Goes Here</h5>")
            ->map(fn ($p) => "<p>$p</p>")
            ->implode(''),
            'penulis_artikel' => $this->faker->name,
            'gambar_artikel' => $this->faker->imageUrl(),
            'keterangan_gambar_artikel' => $this->faker->sentence,
            'keywords' => $this->faker->words(3, true),
            'tanggal_publikasi' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'created_by' => $this->faker->numberBetween(1, 10),
            'updated_by' => $this->faker->numberBetween(1, 10),
            'deleted_by' => null, // assuming it can be null
            'id_kategori_artikel' => $this->faker->numberBetween(1, 5),
            'pengunjung' => $this->faker->numberBetween(1000, 10000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
