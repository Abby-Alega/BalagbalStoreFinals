<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'stock_quantity',
        'reorder_level',
        'max_stock_level',
        'last_restocked',
    ];

    protected $casts = [
        'last_restocked' => 'datetime',
    ];

    // Inventory → Product: Many inventory records belong to one product (M:1)
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
