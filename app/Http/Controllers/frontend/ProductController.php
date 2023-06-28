<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */



    public function show(Product $product)
    {
        return view('detail', compact('product'));
    }



    public function productsPerBrand(Brand $brand){
        $products = $brand->products;
        $hero = Brand::with('products.brand')->where('id',$brand->id)->first();
        return view('products', compact('products','hero'));
    }

    public function productsPerCategory(Category $category){

        $products = $category->subCategories()->with('products','products.brand', 'products.sizes', 'products.color')->get()->pluck('products')->flatten();
        $brands = $products->pluck('brand')->flatten();
        $colors = $products->pluck('color')->flatten();
        $sizes = $products->pluck('sizes')->flatten();
        $hero = $category;
        return view('products', compact('products', 'hero', 'brands', 'colors', 'sizes'));
    }

    public function productsPerSubCategory(SubCategory $subCategory){


        $products = $subCategory->products()->with('brand', 'sizes', 'color')->get()->flatten();
        $brands = $products->pluck('brand')->flatten();
        $colors = $products->pluck('color')->flatten();
        $sizes = $products->pluck('sizes')->flatten();
        $hero = $subCategory->categories;
        return view('products', compact('products', 'hero', 'brands', 'colors', 'sizes'));

    }





}
