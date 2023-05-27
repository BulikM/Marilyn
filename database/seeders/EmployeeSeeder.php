<?php

namespace Database\Seeders;

use App\Http\Middleware\Employee;
use App\Models\Day;
use App\Models\Month;
use App\Models\ReadOrShop;
use App\Models\Title;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $titleId = Title::pluck('id')->toArray();
            $monthId = Month::pluck('id')->toArray();
            $dayId = Day::pluck('id')->toArray();
            $readOrShopId = ReadOrShop::pluck('id')->toArray();
            DB::table('users')->insert([
                "title_id" => fake()->randomElement($titleId),
                "birthdate" => fake()->date,
                "first_name" => fake()->firstName(),
                "last_name" => fake()->lastName(),
                "email" => fake()->unique()->safeEmail(),
                "phone" => fake()->phoneNumber(),
                "mobile_phone" => fake()->phoneNumber(),
                "email_verified_at" => now(),
                "password" => '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG',
                'is_employee' => '1',
                "read_or_shop_id" => fake()->randomElement($readOrShopId),
            ]);
        }
    }
}
