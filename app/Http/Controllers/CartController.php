<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\MenuItem;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class CartController extends Controller
{
    protected $menuItem;
    public function __construct(MenuItem $menuItem)
    {

        $this->menuItem = $menuItem;

    }
    public function addToCart(Request $request)
    {
        if (empty($request->slug)) {
            session()->flash('error', 'Invalid');
            return back();
        }

        $menuItem = MenuItem::where('slug', $request->slug)->first();

        if (!$menuItem) {
            session()->flash('error', 'MenuItem not found');
            return back();
        }

        $already_cart = Cart::where('user_id', auth()->user()->id)
            ->where('order_id')
            ->where('menu_item_id', $menuItem->id)
            ->first();

        if ($already_cart) {
            $already_cart->quantity += 1;
            $already_cart->amount += $menuItem->price * (1 - $menuItem->discount / 100);


            $already_cart->save();
        } else {
            $cart = new Cart;
            $cart->user_id = auth()->user()->id;
            $cart->menu_item_id = $menuItem->id;
            $cart->price = $menuItem->price * (1 - $menuItem->discount / 100);
            $cart->quantity = 1;
            $cart->amount = $cart->price * $cart->quantity;



            $cart->save();
            Wishlist::where('user_id', auth()->user()->id)
                ->where('cart_id')
                ->update(['cart_id' => $cart->id]);
        }

        session()->flash('success', 'Product successfully added to cart');
        return back();
    }

    public function singleAddToCart(MenuItem $menuItem)
    {
        $already_cart = Cart::where('user_id', auth()->user()->id)
            ->where('order_id')
            ->where('menu_item_id', $menuItem->id)
            ->first();

        if ($already_cart) {
            $already_cart->quantity += 1;
            $already_cart->amount += $menuItem->price * (1 - $menuItem->discount / 100);



            $already_cart->save();
        } else {
            $cart = new Cart;
            $cart->user_id = auth()->user()->id;
            $cart->menu_item_id = $menuItem->id;
            $cart->price = $menuItem->price * (1 - $menuItem->discount / 100);
            $cart->quantity = 1;
            $cart->amount = $cart->price * $cart->quantity;



            $cart->save();
            Wishlist::where('user_id', auth()->user()->id)
                ->where('cart_id')
                ->update(['cart_id' => $cart->id]);
        }

        session()->flash('success', 'Product successfully added to cart');
        return back();
    }

    public function updateCart(Request $request, $id)
    {
        $cart = Cart::where('id', $id)
            ->where('user_id', auth()->user()->id)
            ->first();

        if ($cart) {
            $cart->quantity = $request->quantity;
            $cart->amount = $cart->price * $cart->quantity;
            $cart->save();

            session()->flash('success', 'Cart updated successfully');
        } else {
            session()->flash('error', 'Cart item not found');
        }

        return back();
    }

    public function removeFromCart(Request $request)
    {
        $cart = Cart::where('user_id', auth()->user()->id)
            ->where('menu_item_id', $request->menu_item_id)
            ->where('order_id')
            ->first();

        if ($cart) {
            $cart->delete();
            session()->flash('success', 'Cart item removed successfully');
        } else {
            session()->flash('error', 'Cart item not found');
        }

        return back();
    }


}
