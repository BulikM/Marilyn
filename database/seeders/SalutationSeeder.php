<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalutationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("Salutations")->insert([
            ["name" => "Mr"],
            ["name" => "Mrs"],
            ["name" => "Miss"],
            ["name" => "Ms"],
            ["name" => "X"],
        ]);
    }
}
