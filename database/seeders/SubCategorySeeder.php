<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $subcategory = ['marilyn Skin Care','marilyn Bath & Body','Marilyn Beauty Sets','Skin Care','Makeup','Skin Care Devices & Tools','Hair Care','Bath & Body','Beauty Sets','Fragrance','Sunscreen','Dresses','Tops','Bottoms','Jackets & Coats','Active & Loungewear','Swimwear','Shoes','Jewelry','Bags','Accessories','Sex Toys', 'Tools & Devices', 'Vitamins & Supplements', 'Aromatherapy', 'Workout Accessories','Candles','Room Décor','Kitchen','Barware','Tableware','Bedroom','Bathroom','Garden','Books',  'Skirts','Denim','Shorts','Pants','Two-Piece','One-Piece'];

        foreach ($subcategory as $sub){
            if(Str::contains($sub,['marilyn Skin Care','marilyn Bath & Body','Marilyn Beauty Sets']) ){
                $categoryId =1;
            }elseif(Str::contains($sub,['Skin Care','Makeup','Skin Care Devices & Tools','Hair Care','Bath & Body','Beauty Sets','Fragrance','Sunscreen']) ) {
                $categoryId = 2;
            }elseif (Str::contains($sub,['Dresses','Tops','Bottoms','Jackets & Coats','Active & Loungewear','Swimwear','Shoes','Jewelry','Bags','Accessories']) ) {
                $categoryId = 3;
            }elseif (Str::contains($sub,['Sex Toys', 'Tools & Devices', 'Vitamins & Supplements', 'Aromatherapy', 'Workout Accessories']) ) {
                $categoryId = 4;
            }else  {
                $categoryId = 5;
            }
            if(Str::contains($sub,['Skirts','Denim','Shorts','Pants']) ){
                $parentId = 14;
            }elseif(Str::contains($sub,['Two-Piece','One-Piece']) ) {
                $parentId = 17;
            }else{
                $parentId = null;
            }


            SubCategory::create([
                'name'=>$sub,
                'slug' => Str::slug($sub,'-'),
                'category_id'=> $categoryId,
                'parent_id'=> $parentId,
                ]);

        };


    }
}
