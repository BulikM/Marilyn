<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colors = ['Assorted','Beige','Beige Multi', 'Black', 'Black Multi', 'Blue', 'Blue Multi','Brown', 'Brown Multi', 'Burgundy', 'Cream', 'Cream Multi', 'Gold', 'Green', 'Green Multi', 'Grey', 'Grey Multi', 'Light Orange','Light Pink','Multi','Natural', 'Natural Multi', 'Navy', 'Navy Multi','Neutrals','Orange','Orange Multi','Pink','Pink Multi'
        ];
        foreach ($colors as $color) {
            Color::create([
                'name' => $color,
            ]);
        }
    }
}
