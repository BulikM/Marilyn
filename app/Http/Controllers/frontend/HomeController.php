<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductPropertylist;
use Illuminate\Support\Carbon;

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
        $date = Carbon::today()->subDays(7);
        $new_products = Product::with('images', 'brand',)->latest('created_at')->take(11)->get();
        $new_total= Product::where('created_at','>=',$date)->get()->count();
        return view("index", compact('new_products' , 'new_total'));
    }

    public function new()
    {
        $date = Carbon::today()->subDays(7);
        $products = Product::with('brand', 'images')->where('created_at','>=',$date)->get();
        $title = 'New arrivals';
        return view ('products', compact('products', 'title' ));
    }

    public function getaway(){
        $products =Product::with('images', 'brand')->get()->random(15);
        $title = 'the getaway shop';
        return view('products', compact('products', 'title'));
    }



}
