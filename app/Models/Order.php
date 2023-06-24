<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'orders_id');
    }
    public function orderProducts()
    {
        return $this->hasMany(OrderProducts::class, 'orders_id');
    }
}
