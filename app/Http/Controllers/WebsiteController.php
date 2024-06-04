<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\MenuItem;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\View\View;

class WebsiteController extends Controller
{
    /**
     * @return Collection
     */
    private function categories(): Collection
    {
        return Category::all();
    }

    /**
     * @return Collection
     */
    private function menuItems(): Collection
    {
        return MenuItem::all();
    }

    /**
     * @param $categorySlug
     * @return Builder[]|Collection
     */
    private function selectMenuItems($categorySlug): Builder|Collection
    {
        return MenuItem::query()->whereHas('category', function($query) use ($categorySlug) {
            $query->where('slug', $categorySlug);
        })->get();
    }

    /**
     * @return View
     */
    public function index(): View
    {
        $categories = $this->categories();
        $menuItems =$this->menuItems();
        $selectedCategory = null;

        return view('website.index',compact('categories','menuItems','selectedCategory'));
    }

    /**
     * @param string $selectedCategory
     * @return View
     */
    public function menu(string $selectedCategory): View
    {
        $categories = $this->categories();
        $menuItems = $selectedCategory ? $this->selectMenuItems($selectedCategory) : $this->menuItems();

        return view('website.menu', compact('categories', 'menuItems', 'selectedCategory'));
    }

    /**
     * @return View
     */
    public function about(): View
    {
        return view('website.about');

    }

    /**
     * @return View
     */
    public function contact(): View
    {
        return view('website.contact');

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
