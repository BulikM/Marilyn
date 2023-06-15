<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Color;
use App\Models\Images;
use App\Models\Keyword;
use App\Models\Photo;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        $brands = Brand::all();
        $images = Images::all();
        $colors = Color::all();
        $category= ProductCategory::all();
        for ($i = 0; $i < 100; $i++) {
            $product = new Product();
            $product->name = fake()->words(2, true);
            $product->body = fake()->paragraphs(3, true);
            $product->image_id = $images->random()->id;
            $product->color_id = $colors->random()->id;
            $product->brand_id = $brands->random()->id;
            $product->price = fake()->randomFloat(100,1000,2);
            $product->save();
        }
    }
}
