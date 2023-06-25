<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductPropertylist extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = ['product_id', 'brand_id'];

    public function product(){
        $this->belongsTo(Product::class, 'product_id');
    }
    public function Brandss(){
        $this->belongsTo(Brand::class, 'brand_id');
    }
}
