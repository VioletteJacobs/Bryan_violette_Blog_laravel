<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("avatars")->insert([
            [
                "url" => "chevre.png"
            ],
            [
                "url" => "rhino.png"
            ],
            [
                "url" => "chat.png"
            ],
            [
                "url" => "bison.png"
            ],
            [
                "url" => "elephant.png"
            ],
        ]);
    }
}
