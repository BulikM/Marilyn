<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productcategories = ['Made By Marilyn','Beauty','Fashion', 'Wellness', 'food & home'];
        foreach ($productcategories as $productcategorie) {
            Category::create([
                'name' => $productcategorie,
                'slug' => Str::slug($productcategorie,'-'),
            ]);
        }
    }
}
