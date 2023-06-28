<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductPropertylist;
use App\Models\Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductPropertylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::all();
        $brands = Brand::all();
        $sizes = Size::all();
        $colors = Color::all();
        foreach ($products as $product){
            ProductPropertylist::create([
                'product_id'=> $product->id,
                'brand_id'=> $brands->random()->id,
                'color_id'=> $colors->random()->id,
                'size_id'=> $sizes->random()->id
                ]);

        }


    }
}
