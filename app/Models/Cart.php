<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'menu_item_id',
        'quantity',
        'price',
        'discount',
    ];

    /**
     * Get the order that owns the order item.
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * Get the menu item that belongs to the order item.
     */
    public function menuItem()
    {
        return $this->belongsTo(MenuItem::class);
    }
}
