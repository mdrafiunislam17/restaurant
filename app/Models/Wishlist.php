<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_item_id',
        'cart_id',
        'price',
        'quantity',
        'amount',
    ];

    /**
     * Get the menu item associated with the wishlist item.
     */
    public function menuItem()
    {
        return $this->belongsTo(MenuItem::class);
    }

    /**
     * Get the cart associated with the wishlist item.
     */
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}
