<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    //Cart


    public function addToCart(Request $request, $id){
        request()->validate([
            'quantity'=> ['required', 'integer', 'min:1'],
        ],
            [
                'quantity.required'=> 'Quantity is required',
                'quantity.integer' => 'Please give a valid quantity',
                'quantity.min'=>'Please give a valid quantity',
                //   'categories.required'=>'Please check minimum one category'
            ]);

        $product = Product::with(['productcategories', 'brand', 'image'])->where('id','=',$id)->first();
        $oldCart = Session::has('cart') ? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id, $request->quantity);
        Session::put('cart', $cart);

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

    public function cartAddress(){
        if(!Session::has('cart')){
            return redirect('/');
        }else{
            $currentCart =Session::has('cart')? Session::get('cart') : null;
            $cart = new Cart($currentCart);
            $cart = $cart->products;
        }
        return view ('cart-address', compact('cart'));
    }
}
