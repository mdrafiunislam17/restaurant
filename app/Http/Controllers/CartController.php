<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\MenuItem;
use App\Models\Wishlist;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
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
        $menuItem = MenuItem::with('category')->findOrFail($id);

        $action = $request->input('action'); // This action only for delete

        $item = [
            'product' => $menuItem,
            'price' => $menuItem->price,
            'quantity' => 1,
            'total' => $menuItem->price,
        ];

        $cart = Session::get('cart', []);

        $found = false;

        if (!empty($cart)) {
            foreach ($cart as $i => $cartItem) {
                if ($cartItem['product']->id == $menuItem->id) {
                    $found = true;

                    if ($cartItem['quantity'] <= 1 && $action == 'delete') {
                        break;
                    }

                    if ($action == 'delete') {
                        $cartItem['quantity'] -= 1;
                    } else {
                        $cartItem['quantity'] += 1;
                    }

                    $cartItem['total'] = $cartItem['quantity'] * $cartItem['price'];

                    $cart[$i] = $cartItem;
                    break;
                }
            }
        }

        if (!$found) {
            $cart[] = $item;
        }

        Session::put('cart', $cart);

        return redirect()->back();
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


    public function removeFromCart($index)
    {
        $cart = Session::get('cart');

        if (array_key_exists($index, $cart)) {
            unset($cart[$index]);

            Session::put('cart', $cart);

            return redirect()->back();
        }

        return redirect()->back()->with('message', 'Invalid your request');
    }
}
