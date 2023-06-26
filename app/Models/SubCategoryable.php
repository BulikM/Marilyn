<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class SubCategoryable extends Model
{
    use HasFactory;

    protected $table= 'subcategoryable';

    public function subCategoryable(): MorphTo
    {
        return $this->morphTo();
    }
    public function products(): HasMany
    {
        return $this->Hasmany(Product::class, 'subcategoryable');
    }
}
