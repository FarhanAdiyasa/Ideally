<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pertanyaan_Survey>
 */
class PertanyaanSurveyFactory extends Factory
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
            'pertanyaan_survey' => $faker->sentence,
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null,
            'id_survey' => function () {
                return factory(App\Survey::class)->create()->id_survey;
            },
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
