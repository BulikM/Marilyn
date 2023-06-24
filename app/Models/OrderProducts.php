<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProducts extends Model
{
    use HasFactory;

    public function order()
    {
        return $this->belongsTo(Order::class, 'orders_id');
    }
    public function products()
    {
        return $this->belongsTo(Product::class, 'id');
    }
}
