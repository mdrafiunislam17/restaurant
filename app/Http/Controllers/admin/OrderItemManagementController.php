<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderItem;
use App\Models\Order;
use App\Models\MenuItem;

class OrderItemManagementController extends Controller
{
    public function index()
    {
        $orderItems = OrderItem::all();
        return view('admin.order_items.index', compact('orderItems'));

    }
    public function create()
    {
        // Retrieve a list of orders and menu items to populate dropdowns or other input fields
        $orders = Order::all();
        $menuItems = MenuItem::all();

        return view('admin.order_items.create', compact('orders', 'menuItems'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'order_id' => 'required|exists:orders,id',
            'menu_item_id' => 'required|exists:menu_items,id',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
        ]);

        // Create the order item
        OrderItem::create($validatedData);

        return redirect()->route('admin.order_items.index')->with('success', 'Order item created successfully.');
    }
    public function edit($id)
    {
        // Find the order item by its ID
        $orderItem = OrderItem::findOrFail($id);

        // Retrieve a list of orders and menu items to populate dropdowns or other input fields
        $orders = Order::all();
        $menuItems = MenuItem::all();

        return view('admin.order_items.edit', compact('orderItem', 'orders', 'menuItems'));
    }

    // Update the specified order item in storage.
    public function update(Request $request, $id)
    {
        // Validate the request
        $validatedData = $request->validate([
            'order_id' => 'required|exists:orders,id',
            'menu_item_id' => 'required|exists:menu_items,id',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
        ]);

        // Find the order item by its ID and update it
        $orderItem = OrderItem::findOrFail($id);
        $orderItem->update($validatedData);

        return redirect()->route('admin.order_items.index')->with('success', 'Order item updated successfully.');
    }

    // Remove the specified order item from storage.
    public function destroy($id)
    {
        // Find the order item by its ID and delete it
        $orderItem = OrderItem::findOrFail($id);
        $orderItem->delete();

        return redirect()->route('admin.order_items.index')->with('success', 'Order item deleted successfully.');
    }
}
