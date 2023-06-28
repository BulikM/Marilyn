<?php

namespace Database\Factories;

use App\Models\Color;
use App\Models\Images;
use Illuminate\Database\Eloquent\Factories\Factory;
use function Symfony\Component\Translation\t;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'name'=>fake()->unique()->words(2, true),
            'price'=>fake()->randomFloat(100,1000,2),
            'description'=>fake()->paragraph(100, true),
            'info'=>fake()->sentence(5, true),
            'slug'=>fake()->slug(),

        ];
    }
}
