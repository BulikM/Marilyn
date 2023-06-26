<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
    use HasFactory,SoftDeletes;

    public $fillable = ['name'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'category_product_lists', 'product_categories_id', 'product_id',);
    }
    public function subCategories()
    {
        return $this->belongsToMany(SubCategory::class, 'category_product_lists',  'product_categories_id','sub_categories_id', );
    }
}
