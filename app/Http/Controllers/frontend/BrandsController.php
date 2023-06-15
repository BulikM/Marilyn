<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;

class BrandsController extends Controller
{
    public function productsPerBrand($id){
        $brands = Brand::all();
        $products = Product::with(['brand', 'image'])->where('brand_id','=',$id)->get();
        return view('products', compact('brands', 'products'));
    }
}
