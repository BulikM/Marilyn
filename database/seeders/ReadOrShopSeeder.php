<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReadOrShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        db::table("read_or_shops")->insert([
            ["name" => "Read"],
            ["name" => "Shop"],
            ["name" => "Both"],
        ]);
    }
}
