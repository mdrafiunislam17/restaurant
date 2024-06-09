<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use GuzzleHttp\Psr7\Request;
use Illuminate\View\View;

class OrderController extends Controller
{
    public function index(Request $request):view
    {
        $orders = Order::all();
        return view('admin.orders.index',compact('orders'));
    }
}
