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
    protected $fillable = ['price','product_categories_id','name', 'body','slug'];

    public function images(){
        return $this->belongsToMany(Images::class , 'product_images', 'product_id', 'image_id');
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
    public function color(){
        return $this->belongsToMany(Color::class, 'product_propertylists');
    }
    public function Sizes(){
    return $this->belongsToMany(Size::class, 'product_propertylists');
}

    public function subCategories()
    {
        return $this->belongsToMany(SubCategory::class, 'product_subcategories', );
    }

}
