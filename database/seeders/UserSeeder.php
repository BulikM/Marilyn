<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            [
                "email" => "admin@admin.com",
                "first_name"=>'Admin',
                "password" => bcrypt("password"),
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "is_employee"=>1,
                "is_active"=>1,
            ],
            [
                "email" => "marilynbulik@gmail.com",
                "first_name"=>'Marilyn',
                "password" => bcrypt("12345678"),
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "is_employee"=>1,
                "is_active"=>0,
            ],
        ]);
        User::factory()
            ->count(100)
            ->create();
    }
}
