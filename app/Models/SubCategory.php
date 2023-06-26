<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    public $fillable = ['name'];

    public function productCategories()
    {
        return $this->belongsToMany(ProductCategory::class, 'category_product_lists', 'sub_categories_id','product_categories_id', );
    }
    public function products()
    {
        return $this->belongsToMany(Product::class, 'category_product_lists', 'sub_categories_id','product_id', );
    }
}
