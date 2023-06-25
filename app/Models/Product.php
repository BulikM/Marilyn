<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
    public function productcategories(){
        return $this->belongsTo(ProductCategory::class, 'product_categories_id');
    }



    public function orderProducts(){
        return $this->hasMany(OrderProducts::class,'product_id');
    }



    public function brand(){
        return  $this->belongsToMany(Brand::class, 'product_propertylists');
    }
}
