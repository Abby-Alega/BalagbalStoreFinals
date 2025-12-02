<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'email',
        'password_hash',
        'first_name',
        'last_name',
        'date_of_birth',
        'phone_number',
        'address',
    ];

    // Customer → User: Many customers belong to one user (M:1)
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Customer → Orders: One customer can have many orders (1:M)
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
