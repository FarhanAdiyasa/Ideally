<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jawaban_Survey>
 */
class JawabanSurveyFactory extends Factory
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
            'jawaban' => $faker->word,
            'id_user' => function () {
                return factory(App\User::class)->create()->user_id;
            },
            'id_pertanyaan_survey' => function () {
                return factory(App\PertanyaanSurvey::class)->create()->id_pertanyaan_survey;
            },
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
