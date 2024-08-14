<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyPageController extends Controller
{
    public function show()
    {
        $my_reservations = Shop::with(['reservations' => function ($query) {
            $query->where('user_id', Auth::id());
        }])->get();

        $my_favorites = Shop::with(['favorites' => function ($query) {
            $query->where('user_id', Auth::id());
        }])->get();

        return view('my-page', compact('my_reservations', 'my_favorites'));
    }

    public function destroy(Request $request)
    {
        $shop = Shop::find($request->shop_id);
        $shop->favorites()->delete();

        return redirect()->route('mypage', [$request->shop_id]);
    }
}
