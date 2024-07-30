<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Prefecture;
use App\Models\Shop;
use Illuminate\Http\Request;


class ShopController extends Controller
{
    public function show()
    {
        $prefectures = Prefecture::all();
        $genres = Genre::all();

        $shops = Shop::with(['genre', 'prefecture'])->get();
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
        $shopId = $request->shopId;
        $details = Shop::where('id', $shopId)->get();
        $prefectures = Prefecture::all();
        $genres = Genre::all();
        return view('shop-detail', compact('details', 'prefectures', 'genres'));
    }


}
