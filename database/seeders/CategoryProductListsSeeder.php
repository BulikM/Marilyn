<?php

namespace Database\Seeders;

use App\Models\CategoryProductLists;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryProductListsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $sub = SubCategory::all();
        $products = Product::all();
        foreach ($sub as $s){
            CategoryProductLists::create([
                'product_id'=> $products->random()->id,
                'product_categories_id'=> "4",
                'sub_categories_id'=>$s->id,
            ]);
        }

    }
}
