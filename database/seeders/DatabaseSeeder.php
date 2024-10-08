<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\BillingAddresses;
use App\Models\CategoryProductLists;
use App\Models\ProductCategory;
use App\Models\ProductPropertlist;
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
            ColorsSeeder::class,
            ImagesSeeder::class,
            SubCategorySeeder::class,
            BrandsSeeder::class,
            ProductSeeder::class,
            CategorySeeder::class,
            ProductSubcategorySeeder::class,
            ProductImagesSeeder::class,
            SizeSeeder::class,
            ProductPropertylistSeeder::class,

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
