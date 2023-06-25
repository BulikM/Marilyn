<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductCategory;
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('detail', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function productsPerBrand(Brand $brand){
        $brands = Brand::with('products', 'products.image')
            ->findOrFail($brand->id);
        $products = $brands->products;
        $heros = Brand::where('id',$brand->id)->get();
        return view('products', compact('products','heros'));
    }
    public function productsPerCategory(ProductCategory $productCategory){
        $categories = ProductCategory::all();
        $products = Product::with(['productcategories', 'image','brand'])->where('product_categories_id','=',$productCategory->id)->get();
        $heros = ProductCategory::with('subcategories')->where('id',$productCategory->id)->get();
        return view('products', compact('categories', 'products', 'heros'));
    }
    public function productsPerSubCategory($id){
        $categories = ProductCategory::all();
        $products = Product::with(['brand', 'image',])->where('brand_id','=',$id)->get();
        return view('products', compact('categories', 'products'));
    }
}
