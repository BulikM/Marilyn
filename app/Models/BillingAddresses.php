<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BillingAddresses extends Model
{
    use HasFactory, SoftDeletes;
    public $fillable = [
        "user_id",
        "first_name",
        "last_name",
        "street",
        "number",
        "city",
        "province",
        "zipcode",
        "country",
        "Phone",
        "is_primary",
    ];

    //    relatie
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
