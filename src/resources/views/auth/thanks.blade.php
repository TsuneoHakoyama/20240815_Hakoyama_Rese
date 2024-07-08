@extends('layouts/app')

@section('page-title')
Thanks
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class="main-board">
    <div class="thanks-message">
        <p>会員登録ありがとうございます</p>
    </div>
    <div class="back-button">
        <button class="btn" type="submit">ログインする</button>
    </div>
</div>
@endsection