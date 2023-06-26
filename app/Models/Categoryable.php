<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Categoryable extends Model
{
    use HasFactory;
    protected $table = 'categoryable';

    public function categoryable(): MorphTo
    {
        return $this->morphTo();
    }
}
