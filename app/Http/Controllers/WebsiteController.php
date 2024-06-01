<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.index');
    }

    public function menu()
    {
        return view('website.menu');

    }

    public function about()
    {
        return view('website.about');

    }

    public function bookTable()
    {
        return view('website.bookTable');

    }

    public function shopDeals()
    {
        return view('website.shopDetail');

    }
    public function cartShopDeals()
    {
        return view('website.cartShopDetail');

    }
}
