<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSubcategory extends Model
{
    use HasFactory;
    public function product(){
        $this->belongsTo(Product::class, 'subcategory_id', 'product_id');
    }
    public function subCategories(){
        $this->belongsTo(SubCategory::class,'product_id' ,'subcategory_id');
    }
}
