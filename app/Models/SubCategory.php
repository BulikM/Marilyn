<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class SubCategory extends Model
{
    use HasFactory;

    public $fillable = ['name'];
    protected $table = 'subcategory';

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id', );
    }


    public function products(){
        return $this->belongsToMany(Product::class, 'product_subcategories', 'subcategory_id');
    }



    public function subCategories(){
        return $this->hasMany(SubCategory::class, 'parent_id', );
    }





    public function children()
    {
        return $this->hasMany(SubCategory::class, 'parent_id')->with('products', 'children');
    }
    public function parent()
    {
        return $this->belongsTo(SubCategory::class, 'parent_id')->with('products', 'parent');
    }
}
