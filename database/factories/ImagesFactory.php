<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Images>
 */
class ImagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
//
        return [
            'file' => function () {
                $imageUrl = 'https://picsum.photos/640/480';
                $imageData = file_get_contents($imageUrl);
//                $filename = 'posts/' . uniqid() . '.jpg';
                $filenameproducts = 'products/' . uniqid() . '.jpg';
//                Storage::disk('public')->put($filename, $imageData);
                Storage::disk('public')->put($filenameproducts, $imageData);
                return $filenameproducts;
//                return $filename;
            }
        ];

    }
}
