@extends('layouts/app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/book-complete.css') }}">
@endsection

@section('content')
<div class="main-board">
    <div class="thanks-message">
        <p>ご予約ありがとうございます</p>
    </div>
    <div class="back-button">
        <button class="btn" type="submit">戻る</button>
    </div>
</div>
@endsection