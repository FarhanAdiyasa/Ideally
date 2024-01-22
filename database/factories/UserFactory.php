<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'password' => Hash::make('password'), // Default password is 'password'
            'google_id' => $this->faker->unique()->uuid,
            'firstname' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'address' => $this->faker->address,
            'telephone_number' => $this->faker->phoneNumber,
            'birthdate' => $this->faker->date,
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'profesi' => $this->faker->optional()->jobTitle,
            'profile_picture' => $this->faker->optional()->imageUrl(),
            'provinsi' => $this->faker->state,
            'kabupaten' => $this->faker->city,
            'kecamatan' => $this->faker->word,
            'kelurahan' => $this->faker->word,
            'role' => 'admin',
            'deskripsi_diri' => $this->faker->word,
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
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
