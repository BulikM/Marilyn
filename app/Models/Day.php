<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;

    public function Users()
    {
        return $this->belongsToMany(User::class);
    }
    public function Customer()
    {
        return $this->belongsToMany(Customers::class);
    }
}
