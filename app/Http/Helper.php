<?php

// app/Helpers/Helper.php

namespace App\Helpers;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class Helper
{
    public static function getAllMenuItemFromCart($user_id = '')
    {
        if (Auth::check()) {
            if ($user_id == "") {
                $user_id = auth()->user()->id;
            }
            return Cart::with('menuItem')
                ->where('user_id', $user_id)
                ->where('order_id', null)
                ->get();
        } else {
            return 0;
        }
    }
}
