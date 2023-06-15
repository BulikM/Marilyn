<?php

namespace App\Providers;

use App\Models\Brand;
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
        view()->composer(['index', 'shop','detail'], function ($view) {
            $brand = Brand::all();
            $view->with('brand', $brand);

        });

    }
}
