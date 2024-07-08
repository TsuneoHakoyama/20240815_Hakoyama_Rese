@extends('layouts/app')

@section('page-title')
Shop-all
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('shop-all.css') }}">
@endsection

@section('search-box')
<form action="" method="post">
    <div class="select-area">
        <select name="area" id="">All area</select>
    </div>
    <div class="select-genre">
        <select name="genre" id="">All genre</select>
    </div>
    <div class="search-word">
        <input type="text" name="word" placeholder="Search ..." id="">
    </div>
    <div class="search-btn">
        <button type="submit">検索</button>
    </div>
</form>
@endsection

@section('content')
<div class="shop-board">
    <div class="shop-image">
        <img src="" alt="">
    </div>
    <div class="name">
        <p>shop-name</p>
    </div>
    <div class="area-tag">
        <p>#area</p>
    </div>
    <div class="genre-tag">
        <p>#genre</p>
    </div>
    <div class="link__detail">
        <a href="">詳しくみる</a>
    </div>
    <div class="favorite">
        heart-mark
    </div>
</div>
@endsection