<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Genre;
use App\Models\People;
use App\Models\Prefecture;
use App\Models\Shop;
use App\Models\Time;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function show()
    {
        $prefectures = Prefecture::all();
        $genres = Genre::all();
        $shops = Shop::with(['genres', 'prefectures', 'favorites' => function ($query) {
            $query->where('user_id', Auth::id());
        }])->get();

        return view('shop-all', compact('shops', 'prefectures', 'genres'));
    }

    public function search(Request $request)
    {
        $prefectures = Prefecture::all();
        $genres = Genre::all();

        $query = Shop::query();
        $query = $this->getSearchQuery($request, $query);
        $shops = $query->get();

        return view('shop-all', compact('shops', 'prefectures', 'genres'));
    }

    private function getSearchQuery($request, $query)
    {
        if (!empty($request->keyword)) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->keyword . '%');
            });
        }

        if (!empty($request->area)) {
            $query->where('prefecture_id', '=', $request->area);
        }

        if (!empty($request->genre)) {
            $query->where('genre_id', '=', $request->genre);
        }
        return $query;
    }

    public function showDetail(Request $request) {
        $shopId = $request->shop_id;
        $details = Shop::where('id', $shopId)
            ->with(['genres', 'prefectures'])
            ->get();

        $date = Carbon::now()->format('Y/m/d');
        $time = Carbon::now()->format('H:i');
        $reserve_times = Time::all();
        $peoples = People::all();

        return view('shop-detail', compact(['details', 'shopId', 'date', 'time', 'reserve_times', 'peoples']));
    }





}
