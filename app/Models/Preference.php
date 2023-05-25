<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
    use HasFactory;
    public function Users()
    {
        return $this->belongsToMany(User::class, "preference_user");
    }
    public function Customers()
    {
        return $this->belongsToMany(Customers::class, "preference_user");
    }
}
