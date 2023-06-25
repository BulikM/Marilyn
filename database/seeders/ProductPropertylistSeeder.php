<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductPropertylist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductPropertylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::all();
        $brands = Brand::all();
        foreach ($products as $product)
            ProductPropertylist::create([
                'product_id'=> $product->id,
                'brand_id'=> $brands->random()->id,

            ]);
    }
}
