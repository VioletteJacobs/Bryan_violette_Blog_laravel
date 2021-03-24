<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            [
                "name" => "bryan",
                "firstname" => "bryan",
                "email" => "b@b",
                "age" => 28,
                "password" => Hash::make("violette"),
                "role_id" => 1,
                "avatar_id" => 4,
            ],
            [
                "name" => "vio",
                "firstname" => "vio",
                "email" => "v@v",
                "age" => 25,
                "password" => Hash::make("password"),
                "role_id" => 2,
                "avatar_id" => 3
            ],
        ]);
    }
}
