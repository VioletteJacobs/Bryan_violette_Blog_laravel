<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("categories")->insert([
            [
                
                "name" => "Nature",
            ],
            [
                
                "name" => "Portrait",
            ],
            [
                
                "name" => "Animé",
            ],
            [
                
                "name" => "Urbain",
            ],
            [
                
                "name" => "N&B",
            ],
            [
                
                "name" => "Abstrait",
            ],
        ]);
    }
}
