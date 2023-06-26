<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    public $fillable = ['name', 'slug' ,  'parent_id'];

    public function products()
    {
        return $this->morphToMany(Product::class, 'categoryable', 'categoryable');
    }


//    public function products(): MorphToMany
//    {
//        return $this->morphedByMany(Product::class, 'categoryable', 'categoryable', );
//    }
//    public function posts(): MorphToMany
//    {
//        return $this->morphedByMany(Post::class, 'categoryable');
//    }

    public function categoryable():MorphTo {
        return $this->morphTo();
    }
    public function related(): MorphOne
    {
        return $this->morphOne(Categoryable::class, 'categoryable', 'categoryable_type');
    }
    public function subCategories(){
        return $this->hasMany(SubCategory::class, 'category_id');
    }


}
