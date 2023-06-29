<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsletterInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("newsletter_infos")->insert([
            ["name" => "New Podcast Episodes"],
            ["name" => "New youtube content"],
            ["name" => "new articles"],
            ["name" => "new product launches"],
            ["name" => "new marketing promotions"],
            ["name" => "new netflix episodes"],
            ["name" => "new goop events"],
            ["name" => "goop store announcements"],
        ]);
    }
}
