<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rating_Artikel>
 */
class Rating_ArtikelFactory extends Factory
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
            'user_id' => $this->faker->numberBetween(1, 5),
            'rating_artikel' => $this->faker->numberBetween(1, 5),
        ];
    }
}
