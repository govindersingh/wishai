<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'share_id',
        'customer_id',
        'product_id',
        'Variant_id',
        'add_to_wishlist_count',
        'add_to_cart_count',
        'checkout_count',
    ];
}
