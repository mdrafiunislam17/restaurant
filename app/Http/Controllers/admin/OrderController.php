<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    // Display a listing of the orders
    public function index()
    {
        $orders = Order::all();
        return view('admin.orders.index', compact('orders'));
    }

    // Show the form for creating a new order
    public function create()
    {
        $customers = Customer::all();
        return view('admin.orders.create' , compact('customers'));
    }

    // Store a newly created order in the database
    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'order_date' => 'required|date',
            'total_amount' => 'required|numeric',
            'status' => 'required|string',
        ]);

        // Debugging: Log the validated data to ensure correct format
        Log::info('Form data:', $request->all());

        // Create the order
        Order::create($request->all());

        return redirect()->route('admin.orders.index')->with('success', 'Order created successfully.');
    }


    // Show the specified order
    public function show($id)
    {
        $order = Order::findOrFail($id);
        $customers = Customer::all();
        return view('admin.orders.show', compact('order', 'customers'));
    }

    // Show the form for editing the specified order
    public function edit($id)
    {
        $customers = Customer::all();
        $order = Order::findOrFail($id);
        return view('admin.orders.edit', compact('order', 'customers'));
    }

    // Update the specified order in the database
    public function update(Request $request, $id)
    {
        // Validate the request
        $validatedData = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'order_date' => 'required|date',
            'total_amount' => 'required|numeric',
            'status' => 'required|string',
        ]);

        // Debugging: Log the validated data to ensure correct format
        Log::info('Validated Data:', $validatedData);

        // Find the order by ID and update it
        $order = Order::findOrFail($id);
        $order->update($validatedData);

        return redirect()->route('admin.orders.index')->with('success', 'Order updated successfully.');
    }

    // Remove the specified order from the database
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('admin.orders.index')->with('success', 'Order deleted successfully.');
    }
}
