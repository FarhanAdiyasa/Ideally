<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'), // You may want to use Hash::make() instead
            'google_id' => $this->faker->uuid,
            'firstname' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'address' => $this->faker->address,
            'telephone_number' => $this->faker->phoneNumber,
            'birthdate' => $this->faker->date,
            'gender' => $this->faker->randomElement(['male', 'female']),
            'profesi' => $this->faker->optional()->word,
            'profile_picture' => $this->faker->optional()->imageUrl(),
            'provinsi' => $this->faker->word,
            'kabupaten' => $this->faker->word,
            'kecamatan' => $this->faker->word,
            'kelurahan' => $this->faker->word,
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
