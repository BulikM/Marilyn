<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Category;
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

        view()->composer('*', function ($view) {
            $categories = Category::with('subcategories')->get();

            $view->with('categories', $categories);



        });



    }
}
