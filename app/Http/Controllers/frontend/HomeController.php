<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $new_products = Product::with('image', 'brand')->latest('created_at')->take(11)->get();
        $categories = ProductCategory::with('subCategories')->get();
        return view("index", compact('new_products','categories'));
    }
}
