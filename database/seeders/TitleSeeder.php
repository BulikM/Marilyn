<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("titles")->insert([
            ["name" => "Mr"],
            ["name" => "Mrs"],
            ["name" => "Miss"],
            ["name" => "Ms"],
            ["name" => "X"],
        ]);
    }
}
