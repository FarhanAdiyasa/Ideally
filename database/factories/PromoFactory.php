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
        $satuanPotongan = $this->faker->randomElement(['uang', 'persenan']);
        return [
         'judul_promo' => $this->faker->word,
        'deskripsi_promo' => $this->faker->text,
        'tanggal_mulai' => $this->faker->dateTimeThisMonth,
        'tanggal_selesai' => $this->faker->dateTimeThisMonth,
        'created_at' => now(),
        'updated_at' => now(),
        'satuan_potongan' => $satuanPotongan,
        'jumlah_potongan' => $satuanPotongan === 'uang' ? $this->faker->randomFloat(2, 1, 100) : $this->faker->randomFloat(2, 1, 100),
        'created_by' =>$this->faker->numberBetween(1, 5),
        'id_nurseri' =>null,
        'id_batu' =>null,
        'id_konkurito' =>null,
        'id_everlas_things' =>null,
        'id_shineage' =>null,
        'id_agrigard' =>$this->faker->numberBetween(1, 5),
        ];
    }
}
