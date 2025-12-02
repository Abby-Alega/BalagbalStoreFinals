<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'category_id',
        'cost_price',
        'unit_price',
        'is_active',
    ];

    // Products → Category: Many products belong to one category (M:1)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Products → Order_Details: One product can appear in many order details (1:M)
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    // Products → Inventory: One product has one inventory record (1:1)
    public function inventory()
    {
        return $this->hasOne(Inventory::class);
    }
}
