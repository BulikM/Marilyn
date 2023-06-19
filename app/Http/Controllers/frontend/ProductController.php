<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
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
        $products = Product::with('category', 'brand', 'image')->where('created_at','>=',$date)->get();
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
    public function show(string $id)
    {
        $product = Product::with('image', 'brand')->findOrFail($id);
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
//Cart
    public function productsPerBrand($id){
        $brands = Brand::all();
        $products = Product::with(['brand', 'image'])->where('brand_id','=',$id)->get();
        return view('products', compact('brands', 'products'));
    }

    public function addToCart($id){
        $product = Product::with(['productcategories', 'brand', 'image'])->where('id','=',$id)->first();
        $oldCart = Session::has('cart') ? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        session::put ('cart', $cart);
        return redirect()->back();
    }
    public function cart(){
        if(!Session::has('cart')){
            return redirect('/');
        }else{
            $currentCart =Session::has('cart')? Session::get('cart') : null;
            $cart = new Cart($currentCart);
            $cart = $cart->products;
            return view ('cart', compact('cart'));
        }
    }
    public function updateQuantity(Request $request){
        request()->validate([
            'quantity'=> ['required', 'integer', 'min:1'],
        ],
            [
                'quantity.required'=> 'Quantity is required',
                'quantity.integer' => 'Please give a valid quantity',
                'quantity.min'=>'Please give a valid quantity',
                //   'categories.required'=>'Please check minimum one category'
            ]);

        $oldCart = Session::has('cart') ? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->updateQuantity($request->id, $request->quantity);
        Session::put('cart', $cart);
        return redirect()->back();
    }
    public function removeItem($id){
        $oldCart = Session::has('cart') ? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        session::put('cart', $cart);
        return redirect()->back();
    }
}
