<?php

namespace Database\Factories;

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
            'name'=>fake()->sentence,
            'price'=>fake()->randomFloat(100,1000,2),
            'details'=>fake()->paragraph(100, true),
            'amount'=>fake()->numberBetween(0, 10),
        ];
    }
}
