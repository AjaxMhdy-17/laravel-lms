<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "id"=> $this->faker->uuid,
            "whatsapp"=> $this->faker->phoneNumber(),
            "username"=> $this->faker->userName,
            "first_name"=> $this->faker->firstName,
             "last_name"=> $this->faker->lastName,
            "email"=> $this->faker->safeEmail,
            "password"=> Hash::make(1234),
             "user_id"=> random_int(1,10) ,
             "role"=> "2",
             "reference_by"=> "123456",
             "status"=> "active",
             "balance"=> '10.00',
             
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
