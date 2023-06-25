<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
    use HasFactory,SoftDeletes;

    public $fillable = ['name'];

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class, 'product_categories_id' );
    }
    public function products()
    {
        return $this->belongsTo(Product::class, 'product_categories_id');
    }
}
