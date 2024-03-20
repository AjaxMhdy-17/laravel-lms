<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("regular_users")->insert([
            //user
            [   
                 "id"=> random_int(1,10),
                 "whatsapp"=> "01766666666",
                 "username"=> "user",
                 "first_name"=> "user",
                 "last_name"=> "last_name",
                 "email"=> "user@user@.com",
                 "password"=> Hash::make("1234"),
                 "user_id"=>random_int(100000, 999999),
                 "role"=> "2",
                 "reference_by"=> random_int(100000, 999999),
                 "status"=> "active",
                 "balance"=> "200.00",

            ]
            //user
             
        ]);
    }
}
