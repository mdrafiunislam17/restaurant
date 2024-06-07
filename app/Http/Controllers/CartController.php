<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\MenuItem;
use App\Models\Wishlist;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class CartController extends Controller
{
    protected $menuItem;

    public function __construct(MenuItem $menuItem)
    {
        $this->menuItem = $menuItem;
    }

    public function addToCart(Request $request, $id): RedirectResponse
    {
        $menuItem = MenuItem::findOrFail($id);
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $menuItem->name,
                "image" => $menuItem->image,
                "price" => $menuItem->price,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);

        return redirect()->route('website.cartShopDetails')->with('success', 'Item added to cart successfully!');
    }

    public function singleAddToCart($id): RedirectResponse
    {
        $menuItem = MenuItem::findOrFail($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $menuItem->name,
                "image" => $menuItem->image,
                "price" => $menuItem->price,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }


    /**
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function updateCart(Request $request, $id = null): RedirectResponse
    {
        if (!$id) {
            return redirect()->back()->with('error', 'Missing item ID in request!');
        }

        $quantity = $request->get('quantity', 1);
        $cart = session()->get('cart', []);

        if ($quantity < 1) {
            return redirect()->back()->with('error', 'Invalid quantity. Please enter a positive value.');
        }

        if (!isset($cart[$id])) {
            return redirect()->back()->with('error', 'Item not found in cart!');
        }
        $cart[$id]['quantity'] = $quantity;

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Cart updated successfully!');
    }

    /**
     * @param $id
     * @return RedirectResponse
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */

    public function removeFromCart($id = null):RedirectResponse
    {
        if (!$id) {
            return redirect()->back()->with('error', 'Missing item ID in request!');
        }

        $cart = session()->get('cart', []);
        if (!isset($cart[$id])) {
            return redirect()->back()->with('error', 'Item not found in cart!');
        }
        unset($cart[$id]);
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Item removed from cart successfully!');
    }



}
