@extends('layouts/app')

@section('page-title')
My-page
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
<div class="booking-column">
    <div class="title">
        <p>予約状況</p>
    </div>
    
</div>
<div class="favorite-column">
    <div class="user-name">
        User-name
    </div>
    <div class="favorite-shop">
        <div class="title">
            <p>お気に入り店舗</p>
        </div>
        <div class="shop-info">
            <div class="shop-image">
                <img src="" alt="">
            </div>
            <div class="shop-name">
                <p>shop-name</p>
            </div>
            <div class="area-tag">
                prefecture
            </div>
            <div class="genre-tag">
                genre
            </div>
            <div class="detail-link">
                <a href="http://">詳しくみる</a>
            </div>
            <div class="favorite-symbol">
                heart mark
            </div>
        </div>
    </div>
</div>