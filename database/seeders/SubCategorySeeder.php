<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $WelnessSubs = ['Sex Toys', 'Tools & Devices', 'Vitamins & Supplements', 'Aromatherapy', 'Workout Accessories'];
        foreach ($WelnessSubs as $WelnessSub){
            SubCategory::create([
                'name'=>$WelnessSub,
                'slug' => Str::slug($WelnessSub,'-'),
            ]);
        }
    }
}
