<?php

namespace Database\Factories;

use App\Models\Day;
use App\Models\Month;
use App\Models\ReadOrShop;
use App\Models\Salutation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $salutations_id = Salutation::pluck('id')->toArray();
        $monthId = Month::pluck('id')->toArray();
        $dayId = Day::pluck('id')->toArray();
        $readOrShopId = ReadOrShop::pluck('id')->toArray();

        return [
            "salutation_id"=>  fake()->randomElement($salutations_id),
            "month_id"=>  fake()->randomElement($monthId),
            "day_id"=>  fake()->randomElement($dayId),
            "first_name" => fake()->firstName(),
            "last_name" => fake()->lastName(),
            "email" => fake()->unique()->safeEmail(),
            "phone" => fake()->phoneNumber(),
            "mobile_phone" => fake()->phoneNumber(),
            "email_verified_at" => now(),
            "password" => '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG',
            'is_employee' => '0',
            "read_or_shop_id"=>  fake()->randomElement($readOrShopId),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
