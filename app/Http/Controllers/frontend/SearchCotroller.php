<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchCotroller extends Controller
{
    public function search(Request $request){
        if($request->search){
            $products2 = Product::where('description','like', '%' .$request->search."%")->orwhere('description','like', '%' .$request->search."%")->get();
            $products1 = Brand::with('products')->where('name', 'like', '%' .$request->search."%")->get()->pluck('products')->flatten();

            $products = collect()->merge($products1)->merge($products2)->all();
            if(!empty($products)){ return view ('products', compact('products'));}
           else{return redirect()->back()->with([
               "alert" => [
                   "message" => "nothing found",
                   "type" => "danger",
               ],
           ]);}
        }
        else{
            return redirect()->back();
        }

    }

}
