<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Exception;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('admin.restaurant.index', compact('restaurants'));
    }

    public function create()
    {
        return view('admin.restaurant.create');

    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'contact_info' => 'required|string|max:255',
            'operating_hours' => 'required|string|max:255',
        ]);

        try {
            $restaurant = Restaurant::create($validatedData);
        } catch (Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'Failed to create restaurant.']);
        }

        return redirect()->route('admin.restaurant.index')->with('success', 'Restaurant created successfully');
    }

    public function show($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        return view('admin.restaurant.show', compact('restaurant'));
    }

    public function edit($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        return view('admin.restaurant.edit', compact('restaurant'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'contact_info' => 'required|string|max:255',
            'operating_hours' => 'required|string|max:255',
        ]);

        try {
            $restaurant = Restaurant::findOrFail($id);
            $restaurant->update($validatedData);
        } catch (Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'Failed to update restaurant.']);
        }

        return redirect()->route('admin.restaurant.index')->with('success', 'Restaurant updated successfully');
    }

    public function destroy($id)
    {
        try {
            $restaurant = Restaurant::findOrFail($id);
            $restaurant->delete();

            return redirect()->route('admin.restaurant.index')->with('success', 'Restaurant deleted successfully');
        } catch (Exception $e) {
            return redirect()->route('admin.restaurant.index')->with('error', 'Failed to delete restaurant');
        }
    }
}
