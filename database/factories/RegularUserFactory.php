<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RegularUser>
 */
class RegularUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "id"=> random_int(1,500),
            "whatsapp"=> $this->faker->phoneNumber(),
            "username"=> $this->faker->userName,
            "first_name"=> $this->faker->firstName,
             "last_name"=> $this->faker->lastName,
            "email"=> $this->faker->safeEmail,
            "password"=> Hash::make(1234),
             "user_id"=> random_int(100000, 999999),
             "role"=> "2",
             "reference_by"=> random_int(100000, 999999),
             "status"=> "active",
             "balance"=> '200.00',
             
        ];
    }
}
