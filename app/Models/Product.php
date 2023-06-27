<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['price','image_id','product_categories_id','brand_id', 'color_id','name', 'body','slug'];

    public function keywords(){
        return $this->morphToMany(Keyword::class,'keywordable');
    }
    public function image(){
        return $this->belongsTo(Images::class);
    }
    public function color(){
        return $this->belongsTo(Color::class);
    }



    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_products', 'product_id', 'order_id');
    }


    public function orderProducts(){
        return $this->hasMany(OrderProducts::class,'product_id');
    }

    public function brand(){
        return  $this->belongsToMany(Brand::class, 'product_propertylists');
    }
//
//    public function productcategories(){
//        return $this->belongsToMany(ProductCategory::class, 'category_product_lists', 'product_categories_id');
//    }
    public function subCategories()
    {
        return $this->belongsToMany(SubCategory::class, 'product_subcategories', );
    }
//    public function subCategories(): MorphMany
//    {
//        return $this->morphMany(Product::class, 'subcategoryable', 'subcategoryable');
//
//    }


//
//    Public function categories()
//    {
//        Return $this->morphToMany(Category::class, 'categoryable', 'categoryable', );
//    }
}
