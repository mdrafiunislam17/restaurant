<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        "order_date",
        "total_amount",
        "delivery_address",
        "pickup_time",
        "status",
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function menuItems()
    {
        return $this->belongsToMany(MenuItem::class, 'order_items')
            ->withPivot('quantity', 'price')
            ->withTimestamps();
    }



}
