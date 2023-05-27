<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\BillingAddresses;
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
            TitleSeeder::class,
            MonthSeeder::class,
            DaySeeder::class,
            NewsletterInfoSeeder::class,
            ReadOrShopSeeder::class,
            UserSeeder::class,
            BillingAddressesSeeder::class,
            ShippingAddressesSeeder::class,
            EmployeeSeeder::class,
        ]);
    }
}
