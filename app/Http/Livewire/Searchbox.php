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

    public $filters = [
        'brand' => [],
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
