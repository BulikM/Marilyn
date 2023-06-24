<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\ProductCategory;
use Illuminate\Support\ServiceProvider;

class CommenViewProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

            $categories = ProductCategory::with('subCategories')->get();
            view()->share('categories', $categories);


    }
}
