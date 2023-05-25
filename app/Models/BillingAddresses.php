<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillingAddresses extends Model
{
    use HasFactory;
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
    public function Customer()
    {
        return $this->belongsTo(Customers::class);
    }
}
