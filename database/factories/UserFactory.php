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
    public function definition()
    {
        $password = '123456';
        $hash = bcrypt($password);

        return [
            'name' => 'Cristian Cartes',
            'email' => 'cristiancartesa@gmail.com',
            'email_verified_at' => now(),
            'password' => $hash, // password
            'remember_token' => Str::random(10),
            'role_id' => 4,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
