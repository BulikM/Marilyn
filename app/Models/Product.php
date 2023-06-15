<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['price','image_id','productcategory_id','brand_id', 'color_id','name', 'body'];

    public function keywords(){
        return $this->morphToMany(Keyword::class,'keywordable');
    }
    public function image(){
        return $this->belongsTo(Images::class);
    }
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function color(){
        return $this->belongsTo(Color::class);
    }
    public function productcategories(){
        return $this->belongsToMany(ProductCategory::class,'product_productcategory','product_id', 'productcategory_id');
    }
}
