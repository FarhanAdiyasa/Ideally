<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Survey>
 */
class SurveyFactory extends Factory
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

            'judul_survey' => $faker->name,
            'deskripsi_survey' => $faker->text,
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null,
            'created_by' => function () {
                return factory(App\User::class)->create()->user_id;
            },
            'updated_by' => function () {
                return factory(App\User::class)->create()->user_id;
            },
            'deleted_by' => function () {
                return factory(App\User::class)->create()->user_id;
            },
            
        ];
    }
}
