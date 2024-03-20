<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "id"=> random_int(1,500) ,
            "whatsapp"=>  $this->faker->phoneNumber(),
            'name' => 'Admin',
            'email' => fake()->unique()->safeEmail(),
             'password'=> Hash::make('1234'),
             "user_id"=> random_int(1,500) ,
             "role"=> "0",
             "reference_id"=> random_int(1,10) ,
        ];
    }
}
