<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class BillingAddressesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("billing_addresses")->insert([
            "user_id" => "1",
            "first_name" => "marilyn",
            "last_name" => "Bulik",
            "street" => "beversesteenweg",
            "number" => "394",
            "city" => "roeselare",
            "province" => "west-vlaanderen",
            "zipcode" => "8800",
            "country" => "Belgie",
            "phone" => "0495/886463",
            "is_primary" => "1",
            "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
            "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
        ]);
    }
}
