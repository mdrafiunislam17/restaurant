<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DeliveryAddress;
use App\Models\Order;
use GuzzleHttp\Psr7\Request;
use Illuminate\View\View;

class OrderController extends Controller
{
    public function index():view
    {
        $deliveryAddresses = DeliveryAddress::all();
        return view('admin.orders.index',compact('deliveryAddresses'));
    }

    public function show(Order $order)
    {

        $order->load('orderItems', 'deliveryAddress', 'payment');

        // Calculate total amount
        $totalAmount = $order->orderItems->sum(function ($item) {
            return $item->price * $item->quantity;
        });

        // Pass the order, total amount, and related data to the view
        return view('admin.orders.show', compact('order', 'totalAmount'));

    }
}
