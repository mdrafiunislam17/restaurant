<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
    protected $fillable = [
        "customer_id",
        "menu_item_id",
        "quantity",
    ];
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function menuItem()
    {
        return $this->belongsTo(MenuItem::class);
    }
}
