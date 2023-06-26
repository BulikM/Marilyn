<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategoryableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::all();
        $subId = SubCategory::all();

        foreach ($products as $product){
            DB::table('subcategoryable')->insert([
                'subcategory_id'=> $subId->random()->id,
                'subcategoryable_id'=>$product->id,
                'subcategoryable_type' => 'App\Models\Product'
            ]);
        }
    }
}
