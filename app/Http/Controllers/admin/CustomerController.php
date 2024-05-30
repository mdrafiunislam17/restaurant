<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // Display a listing of the customers
    public function index()
    {
        $customers = Customer::all();
        return view('admin.customers.index', compact('customers'));
    }

    // Show the form for creating a new customer
    public function create()
    {
        return view('admin.customers.create');
    }

    // Store a newly created customer in the database
    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email',
            'password' => 'required|string|min:6',
            'contact_info' => 'nullable|string|max:255',
        ]);

        // Create the customer
        Customer::create($validatedData);

        return redirect()->route('admin.customers.index')->with('success', 'Customer created successfully.');
    }

    // Show the specified customer
    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        return view('admin.customers.show', compact('customer'));
    }

    // Show the form for editing the specified customer
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('admin.customers.edit', compact('customer'));
    }

    // Update the specified customer in the database
    public function update(Request $request, $id)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email,' . $id,
            'contact_info' => 'nullable|string|max:255',
        ]);

        // Find the customer by ID and update it
        $customer = Customer::findOrFail($id);
        $customer->update($validatedData);

        return redirect()->route('admin.customers.index')->with('success', 'Customer updated successfully.');
    }

    // Remove the specified customer from the database
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return redirect()->route('admin.customers.index')->with('success', 'Customer deleted successfully.');
    }
}
