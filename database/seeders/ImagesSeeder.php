<?php

namespace Database\Seeders;

use App\Models\Images;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;


class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        Storage::disk('public')->deleteDirectory('products');
        Images::factory()->count(100)->create();
    }
}
