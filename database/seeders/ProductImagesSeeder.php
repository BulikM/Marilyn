<?php

namespace Database\Seeders;

use App\Models\Images;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use function GuzzleHttp\Promise\all;

class ProductImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $roducts = Product::all();
       $images = Images::all();

       foreach ($roducts as $product)
           foreach (range(1, 5) as $index) {
               DB::table("product_images")->insert([
                   "product_id" => $product->id,
                   "image_id"=> $images->random()->id,
               ]);
           }
    }
}
