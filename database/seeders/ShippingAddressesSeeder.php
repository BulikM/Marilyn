<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ShippingAddressesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("shipping_addresses")->insert([
            "user_id" => "2",
            "first_name" => "marilyn2",
            "last_name" => "Bulik2",
            "street" => "beversesteenweg2",
            "number" => "3942",
            "city" => "roeselare2",
            "province" => "west-vlaanderen2",
            "zipcode" => "88002",
            "country" => "Belgie2",
            "phone" => "0495/8864632",
            "is_primary" => "1",
            "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
            "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
        ]);
    }
}
