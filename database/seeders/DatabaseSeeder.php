<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\BillingAddresses;
use App\Models\ProductCategory;
use App\Models\SubCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call([
            PreferenceSeeder::class,
            SalutationSeeder::class,
            MonthSeeder::class,
            DaySeeder::class,
            NewsletterInfoSeeder::class,
            ReadOrShopSeeder::class,
            UserSeeder::class,
            BillingAddressesSeeder::class,
            ShippingAddressesSeeder::class,
            EmployeeSeeder::class,
            BrandsSeeder::class,
            ColorsSeeder::class,
            KeywordsSeeder::class,
            ImagesSeeder::class,
            ProductCategorySeeder::class,
            SubCategorySeeder::class,
            ProductSeeder::class,

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
