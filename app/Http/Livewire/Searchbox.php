<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use App\Models\Color;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Arr;
use Livewire\Component;


class Searchbox extends Component
{
    public $originalProducts;
    public $products;
    public $hero;
    public $brands;
    public $colors;
    public $sizes;
    public $sortField;

    public $filters = [
        'brand' => [],
        'color' =>[],
//        'size' =>[],
        ];


    public function render()
    {
        $filteredProducts = $this->originalProducts;

        if (!empty($this->filters['brand'])) {
            $brandNames = $this->filters['brand'];

            $filteredProducts = $filteredProducts->where(function ($product) use ($brandNames) {
                foreach ($product->brand as $brand) {
                    if (in_array($brand->name, $brandNames)) {
                        return true;
                    }
                }
                return false;
            });
        }
        if (!empty($this->filters['color'])) {
            $colorname = $this->filters['color'];

            $filteredProducts = $filteredProducts->where(function ($product) use ($colorname) {
                foreach ($product->color as $color) {
                    if (in_array($color->name, $colorname)) {
                        return true;
                    }
                }
                return false;
            });
        }



        if (!empty($this->filters['size'])) {
            $sizename = $this->filters['size'];

//            $filteredProducts = $filteredProducts->where(function ($product) use ($sizename) {
//                foreach ($product->size as $size) {
//                    if (in_array($size->name, $sizename)) {
//                        return true;
//                    }
//                }
//                return false;
//            });
        }
//
        $this->products = $filteredProducts;

        return view('livewire.searchbox', [
            'products' => $this->products,
            'hero' => $this->hero,
            'brands' => $this->brands,
            'colors' => $this->colors,
            'sizes' => $this->sizes
        ]);
    }
}
