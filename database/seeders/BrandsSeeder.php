<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subCategories = SubCategory::all();
        $brands = ['Adidas by Stella McCartney', 'AGOLDE', 'Agua by Agua Benita', 'Alemais', 'Alex Mill', 'All That Remains', 'AMO', 'Anemos', 'Araks', 'B SIDES', 'Bond-Eye', 'BONDI BORN', 'By Malene Birger', 'Calle Del Mar', 'Cara Cara', 'CASHMERE IN LOVE', 'Cecilie Bahnsen', 'Ciao Lucia', 'Citizens of Humanity', 'Co', 'Cou Cou Intimates','Coyuchi', 'Desmond and Dempsey', 'Electric & Rose', 'Emilia Wickstead x Marilyn', 'Ephemera', 'ESSE', 'Fella Swim', 'M. Label by Marilyn', 'Ganni'
        ];
        foreach ($brands as $brand) {
            Brand::create([
                'name' => $brand,
                'description' => fake()->text(150, true),
                'slug' => Str::slug($brand,'-'),
            ]);
        }
    }
}
