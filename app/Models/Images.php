<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Images extends Model
{
    use HasFactory;
    protected $fillable = ["file"];
    protected $uploads='/assets/';
    //accessor

    //getFileAttribute: samenstelling
    public function getFileAttribute($photo){
        return $this->uploads .$photo;
    }

//    public function post()
//    {
//        return $this->hasOne(Post::class);
//    }
    public function products(){
        return $this->belongsToMany(Product::class, 'product_images');
    }

}
