<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;


class AdminSeedar extends Seeder
{
   
    public function run(): void
    {
        DB::table("admins")->insert([
            //admin
            [   "id"=> random_int(1,10),
                 "whatsapp"=> "01766666666",
                "name"=> "Admin",
                "email"=> "admin@admin.com",
                "password"=> Hash::make("1234"),
                "user_id"=> random_int(1,10) ,
                "role"=> "0",
                "reference_id"=> random_int(1,10),
            ]
            //user
             
        ]);
    }
}
