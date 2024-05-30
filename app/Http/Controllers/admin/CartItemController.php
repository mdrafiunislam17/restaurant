<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use App\Models\Customer;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class CartItemController extends Controller
{
    public function index()
    {
        $cartItems = CartItem::all(); // Retrieve all cart items

        return view('admin.cart_items.index', compact('cartItems'));
    }
    // Display the form for creating a new cart item.
    public function create()
    {
        // You may pass any necessary data to the view here
        $customers = Customer::all();
        $menuItems = MenuItem::all();
        return view('admin.cart_items.create', compact('customers', 'menuItems'));
    }

    // Store a newly created cart item in storage.
    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'menu_item_id' => 'required|exists:menu_items,id',
            'quantity' => 'required|integer|min:1',
        ]);

        // Create the cart item
        CartItem::create($validatedData);

        return redirect()->route('admin.cartItems.index')->with('success', 'Cart item added successfully.');
    }

    // Display the specified cart item.
    public function show($id)
    {
        $cartItem = CartItem::findOrFail($id);
        $customers = Customer::all();
        $menuItems = MenuItem::all();


        return view('admin.cart_items.show', compact('cartItem', 'customers', 'menuItems'));
    }

    public function edit($id)
    {
        $cartItem = CartItem::findOrFail($id);
        $customers = Customer::all();
        $menuItems = MenuItem::all();

        return view('admin.cart_items.edit', compact('cartItem', 'customers', 'menuItems'));

    }

    // Update the specified cart item in storage.
    public function update(Request $request, $id)
    {
        // Validate the request
        $validatedData = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'menu_item_id' => 'required|exists:menu_items,id',
            'quantity' => 'required|integer|min:1',
        ]);

        // Find the cart item by ID and update it
        $cartItem = CartItem::findOrFail($id);
        $cartItem->update($validatedData);

        return redirect()->route('admin.cartItems.index')->with('success', 'Cart item updated successfully.');
    }

    // Remove the specified cart item from storage.
    public function destroy($id)
    {
        // Find the cart item by ID and delete it
        $cartItem = CartItem::findOrFail($id);
        $cartItem->delete();

        return redirect()->route('admin.cartItems.index')->with('success', 'Cart item deleted successfully.');
    }
}
