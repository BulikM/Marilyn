<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class SubCategory extends Model
{
    use HasFactory;

    public $fillable = ['name'];
    protected $table = 'subcategory';

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id', );
    }

    public function products(): MorphToMany
    {
        return $this->morphedByMany(Product::class, 'subcategoryable', 'subcategoryable', 'subcategoryable_id' );
    }

    public function subCategoryable(): MorphTo
    {
        return $this->morphTo();
    }
    public function related(): MorphToMany
    {
        return $this->morphToMany(SubCategoryable::class, 'subcategoryable', 'subcategoryable_type');
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
