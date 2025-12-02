<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'order_date',
        'order_status',
        'total_amount',
        'payment_status',
    ];

    protected $casts = [
        'order_date' => 'datetime',
    ];

    // Order → Customer: Many orders belong to one customer (M:1)
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // Order → OrderDetails: One order can have many order details (1:M)
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
