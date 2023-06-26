<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::all();

        foreach ($products as $product){
            DB::table('categoryable')->insert([
                'category_id'=> rand(1,5),
                'categoryable_id'=>$product->id,
                'categoryable_type' => 'App\Models\Product'
            ]);
        }
    }
}
