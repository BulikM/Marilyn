<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        $productcategories = ['Made By Goop','Beauty','Fashion', 'Wellness', 'food & home', 'Read'];
        foreach ($productcategories as $productcategorie) {
            ProductCategory::create([
                'name' => $productcategorie,
                'slug' => Str::slug($productcategorie,'-'),
            ]);
        }
    }
}
