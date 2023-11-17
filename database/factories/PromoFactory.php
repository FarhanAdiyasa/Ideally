<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Promo>
 */
class PromoFactory extends Factory
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
            'judul_promo' => $faker->word,
        'deskripsi_promo' => $faker->text,
        'tanggal_mulai' => $faker->dateTimeThisMonth,
        'tanggal_selesai' => $faker->dateTimeThisMonth,
        'created_at' => now(),
        'updated_at' => now(),
        'satuan_potongan' => $faker->word,
        'jumlah_potongan' => $faker->randomFloat(2, 1, 100),
        'created_by' => function () {
            return factory(App\User::class)->create()->user_id;
        },
        'updated_by' => function () {
            return factory(App\User::class)->create()->user_id;
        },
        'id_nurseri' => function () {
            return factory(App\DedikasiFlora::class)->create()->id_nurseri;
        },
        'id_batu' => function () {
            return factory(App\BatuNesia::class)->create()->id_batu;
        },
        'id_konkurito' => function () {
            return factory(App\Konkurito::class)->create()->id_konkurito;
        },
        'id_everlas_things' => function () {
            return factory(App\EverlasThing::class)->create()->id_everlas_things;
        },
        'id_shineage' => function () {
            return factory(App\Shineage::class)->create()->id_shineage;
        },
        'id_agrigard' => function () {
            return factory(App\Agrigard::class)->create()->id_agrigard;
        },
        ];
    }
}
