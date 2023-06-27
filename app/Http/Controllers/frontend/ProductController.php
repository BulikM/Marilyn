<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\SubCategoryable;
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
    public function index()
    {
        $date = Carbon::today()->subDays(7);
        $products = Product::with('category', 'image')->where('created_at','>=',$date)->get();
        return view ('products', compact($products));
    }


    public function show(Product $product)
    {
        return view('detail', compact('product'));
    }



    public function productsPerBrand(Brand $brand){
        $brands = Brand::with('products', 'products.image')
            ->findOrFail($brand->id);
        $products = $brands->products;
        $hero = Brand::with('products')->where('id',$brand->id)->first();
        return view('products', compact('products','hero'));
    }

    public function productsPerCategory(Category $category){
        $products = $category->subCategories()->with('products','subCategories.children')->get()->pluck('products')->flatten();
        $hero = $category;
        return view('products', compact('products', 'hero'));
    }

    public function productsPerSubCategory(SubCategory $subCategory){
       $category = $subCategory->cotegory_id;
        $products = $subCategory->products()->get();
        $sub = SubCategory::with('products')->where('id',$subCategory->id)->get();
        $hero = $subCategory->categories;
        return view('products', compact('products', 'hero'));

    }





}
