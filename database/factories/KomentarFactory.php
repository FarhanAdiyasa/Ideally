<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Komentar>
 */
class KomentarFactory extends Factory
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
            'isi_komentar' =>  $this->faker->text,
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null,
            'created_by' => $this->faker->numberBetween(1, 10),
            'updated_by' => $this->faker->numberBetween(1, 10),
            'deleted_by' => null, 
            'status_tampil' => $this->faker->numberBetween(0, 1), 
            'id_artikel' => $this->faker->numberBetween(1, 10), 
        ];
    }
}
