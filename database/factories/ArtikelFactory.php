<?php

namespace Database\Factories;

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
    public function definition(): array
    {
        return [
            //

            'judul_artikel' => $faker->sentence,
            'slug' => $faker->slug,
            'deskripsi_artikel' => $faker->text,
            'isi_artikel' => $faker->paragraphs(3, true),
            'penulis_artikel' => $faker->name,
            'gambar_artikel' => $faker->imageUrl(),
            'keywords' => $faker->words(5, true),
            'tanggal_publikasi' => $faker->dateTimeThisMonth,
            'created_by' => function () {
                return factory(App\User::class)->create()->id;
            },
            'updated_by' => function () {
                return factory(App\User::class)->create()->id;
            },
            'deleted_by' => null,
            'id_kategori_artikel' => function () {
                return factory(App\KategoriArtikel::class)->create()->id_kategori;
            },
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null,
        ];
    }
}
