<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $products = [];
    public $totalQuantity = 0;
    public $totalPrice = 0;

    public function __construct($oldCart = null)
    {
        if ($oldCart) {
            $this->products = $oldCart->products;
            $this->totalQuantity = $oldCart->totalQuantity;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($product, $product_id, $quantity)
    {
        $request = request();
        if (array_key_exists($product_id, $this->products)) {
            $shopItems = $this->products[$product_id];
        } else {
            $shopItems = [
                'quantity' => 0,
                'product_id' => 0,
                'product_name' => $product->name,
                'product_price' => $product->price,
                'brand_name' => $request->brand,
                'color_name' => $request->color,
                'product_size' => $request->size,
                'product_description' => $product->description,
                'slug' => $product->slug,
                'product' => $product,
            ];
        }

        $shopItems['quantity'] += $quantity;
        $shopItems['product_id'] = $product_id;
        $shopItems['product_name'] = $product->name;
        $shopItems['product_price'] = $product->price;
        $shopItems['brand_name']=$request->brand;
        $shopItems['color_name']=$request->color;
        $shopItems['size'] = $request->size;
        $shopItems['product_description'] = $product->description;
        $shopItems['slug'] = $product->slug;
        $shopItems['product'] = $product;

        $this->totalQuantity += $quantity;
        $this->totalPrice += $quantity * $product->price;

        $this->products[$product_id] = $shopItems;
    }

    public function updateQuantity($id, $quantity)
    {
        $difference = $quantity - $this->products[$id]['quantity'];

        $this->products[$id]['quantity'] = $quantity;
        $this->totalQuantity += $difference;
        $this->totalPrice += $difference * $this->products[$id]['product_price'];
    }

    public function removeItem($id){
        $this->totalQuantity -= $this->products[$id]['quantity'];
        $this->totalPrice -= ($this->products[$id]['quantity']*$this->products[$id]['product_price']);
        unset($this->products[$id]);
    }
}
