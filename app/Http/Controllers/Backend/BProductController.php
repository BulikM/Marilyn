<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Images;
use App\Models\Keyword;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class BProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $brands = Brand::all();
        $products = Product::with(['keywords','image','brand','productcategories','color'])->paginate(10);

        return view('backend.products.index', compact('products', 'brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $keywords = Keyword::all();
        $categories = ProductCategory::all();
        $brands = Brand::all();
        return view('backend.products.create', compact('keywords', 'categories', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'name' => 'required|string|max:255',
        'description' => 'required|string|max:855',
    ]);
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->save();
        foreach ($request->file('images') as $imagefile) {
            $image = new Images;
            $path = $imagefile->store('products');
            $image->url = $path;
            $image->product_id = $product->id;
            $image->save();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
}
