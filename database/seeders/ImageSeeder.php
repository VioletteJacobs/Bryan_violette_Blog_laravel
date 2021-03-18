<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                "url" => "abstrait.jpeg",
                "category_id" => 6
            ],
            [
                "url" => "rappeur.jpeg",
                "category_id" => 5
            ],
            [
                "url" => "ville.jpeg",
                "category_id" => 4
            ],
            [
                "url" => "portrait.jpeg",
                "category_id" => 2
            ],
            [
                "url" => "montagne.jpeg",
                "category_id" => 1
            ],
            [
                "url" => "vieux.jpeg",
                "category_id" => 2
            ],
            [
                "url" => "perle.jpeg",
                "category_id" => 6
            ],
            [
                "url" => "soleil.jpeg",
                "category_id" => 1
            ],
            [
                "url" => "peinture.jpeg",
                "category_id" => 6
            ],
            [
                "url" => "glace.jpeg",
                "category_id" => 1
            ],
            [
                "url" => "mecstyle.jpeg",
                "category_id" => 2
            ],



        ]);
    }
}
