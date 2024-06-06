<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\MenuItem;
use App\Models\Setting;
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


    private function settings(): Collection
    {
        return new Collection(Setting::pluck('value', 'setting_name'));
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
        $settings =  $this->settings();

        return view('website.index',compact('categories','menuItems','selectedCategory','settings'));
    }

    /**
     * @param string $selectedCategory
     * @return View
     */
    public function menu(string $selectedCategory = null): View
    {
        $categories = $this->categories();
        $menuItems = $selectedCategory ? $this->selectMenuItems($selectedCategory) : $this->menuItems();
        $settings =  $this->settings();

        return view('website.menu', compact('categories', 'menuItems', 'selectedCategory','settings'));
    }

    /**
     * @return View
     */
    public function about(): View
    {
        $settings =  $this->settings();
        return view('website.about' , compact('settings'));

    }

    /**
     * @return View
     */
    public function contact(): View
    {
        $settings =  $this->settings();
        return view('website.contact', compact('settings'));

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
