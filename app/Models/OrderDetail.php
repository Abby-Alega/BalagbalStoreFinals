<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'unit_price',
        'subtotal',
    ];

    // OrderDetail → Order: Many order details belong to one order (M:1)
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // OrderDetail → Product: Many order details can reference one product (M:1)
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
