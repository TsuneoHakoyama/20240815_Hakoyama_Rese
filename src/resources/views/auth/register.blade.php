@extends('layouts/app')

@section('page-title')
Registration
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('register.css') }}">
@endsection

@section('content')
<div class="main-board">
    <div class="board-title">
        <p>Registration</p>
    </div>
    <form action="" method="post">
        <div class="input__name">
            <input type="text" name="name" placeholder="Username">
        </div>
        <div class="input__email">
            <input type="email" name="email" placeholder="Email" id="">
        </div>
        <div class="input__password">
            <input type="password" name="password" placeholder="Password" id="">
        </div>
        <div class="btn__submit">
            <button class="btn" type="submit">登録</button>
        </div>
    </form>
</div>
@endsection