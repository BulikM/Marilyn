<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PreferenceSeeder::class,
            UserSeeder::class,
            TitleSeeder::class,
            MonthSeeder::class,
            DaySeeder::class,
            NewsletterInfoSeeder::class,
            ReadOrShopSeeder::class,
        ]);
    }
}
