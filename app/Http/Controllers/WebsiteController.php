<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $selectedCategory = $request->get('category');

        $menuItems = $selectedCategory
            ? MenuItem::whereHas('category', function($query) use ($selectedCategory) {
                $query->where('slug', $selectedCategory);
            })->get()
            : MenuItem::all();
        return view('website.index',compact('categories','menuItems','selectedCategory'));
    }

    public function menu(Request $request)
    {
        $categories = Category::all();
        $selectedCategory = $request->get('category');

        $menuItems = $selectedCategory
            ? MenuItem::whereHas('category', function($query) use ($selectedCategory) {
                $query->where('slug', $selectedCategory);
            })->get()
            : MenuItem::all();

        return view('website.menu', compact('categories', 'menuItems', 'selectedCategory'));
    }

    public function about()
    {
        return view('website.about');

    }

    public function bookTable()
    {
        return view('website.bookTable');

    }

    public function shopDeals(Request $request, $id)
    {
        $menuItem = MenuItem::findOrFail($id);
        $quantity = $request->input('quantity', 1);
        return view('website.shopDetail', compact('menuItem', 'quantity'));
    }
    public function cartShopDeals()
    {
        return view('website.cartShopDetail');

    }
}
