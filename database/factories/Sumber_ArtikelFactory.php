<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sumber_Artikel>
 */
class Sumber_ArtikelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_artikel' =>$this->faker->numberBetween(1, 10),
            'sumber_artikel' => $this->faker->sentence,
        ];
    }
}
