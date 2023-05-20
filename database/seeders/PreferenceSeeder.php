<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PreferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("preferences")->insert([
            ["name" => "Beauty"],
            ["name" => "Food & Home"],
            ["name" => "Style"],
            ["name" => "Travel"],
            ["name" => "Wellness"],
        ]);
    }
}
