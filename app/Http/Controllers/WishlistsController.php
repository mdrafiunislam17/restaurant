<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistsController extends Controller
{
    public function wishListCount(Request $request)
    {
        $request->validate([
            'slug' => 'required|string',
        ]);

        $menuItem = MenuItem::where('slug', $request->slug)->first();

        if (!$menuItem) {
            return back()->with('error', 'Invalid item.');
        }

        $alreadyInWishlist = Wishlist::where('user_id', auth()->id())
            ->whereNull('cart_id')
            ->where('menu_item_id', $menuItem->id)
            ->first();

        if ($alreadyInWishlist) {
            return back()->with('error', 'You already placed this item in your wishlist.');
        }



        $wishlist = new Wishlist;
        $wishlist->user_id = auth()->id();
        $wishlist->menu_item_id = $menuItem->id;
        $wishlist->price = $menuItem->price - ($menuItem->price * $menuItem->discount / 100);
        $wishlist->quantity = 1;
        $wishlist->amount = $wishlist->price * $wishlist->quantity;

        $wishlist->save();

        return back()->with('success', 'Item successfully added to wishlist.');
    }

    public function removeWishlist(Request $request)
    {
        $wishlist = Wishlist::find($request->id);

        if ($wishlist) {
            $wishlist->delete();
            return back()->with('success', 'Wishlist item successfully removed.');
        }

        return back()->with('error', 'Error, please try again.');
    }
}
