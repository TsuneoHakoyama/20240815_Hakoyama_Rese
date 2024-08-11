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
        $my_shops = Shop::with(['reservations', 'favorites' => function ($query) {
            $query->where('user_id', Auth::id());
        }])->get();

            return view('my-page', compact('my_shops'));
    }

    public function cancel(Request $request)
    {
        Reservation::find($request->reservation_id)->delete();

        return redirect()->route('mypage', [$request->shop_id]);
    }

    public function destroy(Request $request)
    {
        $shop = Shop::find($request->shop_id);
        $shop->favorites()->delete();

        return redirect()->route('mypage', [$request->shop_id]);
    }
}
