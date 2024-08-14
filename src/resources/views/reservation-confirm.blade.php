<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop-detail</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/reservation-confirm.css">
</head>

<body>
    <div class="main-content">
        <div class="main-board">
            <div class="shop-detail">
                <div class="header__wrapper-title">
                    <div class="title-logo">
                        <button class="burger" id="burger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                    <div class="logo">
                        <a href="#">Rese</a>
                    </div>
                    <nav class="menu" id="menu">
                        <ul>
                            <li><a href="{{ route('shop-all') }}">Home</a></li>
                            <li><a href="{{ route('logout') }}">Logout</a></li>
                            <li><a href="{{ route('mypage') }}">Mypage</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="shop-info">
                    @foreach ($details as $detail)
                    <div class="back-btn">
                        <a href="{{ route('shop-all') }}">&lt;</a>
                    </div>
                    <div class="shop-name">
                        <p>{{ $detail->name }}</p>
                    </div>
                </div>
                <div class="shop-card">
                    <div class="shop-image">
                        <img src="{{ $detail->image }}" alt="店舗画像">
                    </div>
                    <div class="shop-tag">
                        <div class="area-tag">#{{ $detail->prefectures->name }}</div>
                        <div class="genre-tag">#{{ $detail->genres->name }}</div>
                    </div>
                    <div class="introduction">
                        <p>{{ $detail->detail }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="booking-form">
                <div class="title">
                    <p>予約</p>
                </div>
                <div class="input-form">
                    <div class="input__date">
                        <input type="date" name="date" id="" value="{{ $confirm['date'] }}">
                    </div>
                    <div class="input__time">
                        <select name="time" id="">
                            <option value="">{{ $confirm['time'] }}</option>
                        </select>
                    </div>
                    <div class="input__people">
                        <select name="people" id="">
                            <option value="">{{ $confirm['people' ]}}人</option>
                        </select>
                    </div>
                </div>
                <form action="/reservation" method="post">
                    @csrf
                    <div class="confirm-window">
                        <div class="input-hidden">
                            <input type="hidden" name="shop_id" value="{{ $shopId }}">
                        </div>
                        <table class="description">
                            <tr>
                                <th>Shop</th>
                                <td>{{ $detail->name }}</td>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <td><input type="date" name="date" value="{{ $confirm['date'] }}" readonly /></td>
                            </tr>
                            <tr>
                                <th>Time</th>
                                <td><input type="time" name="time" value="{{ $confirm['time'] }}" readonly /></td>
                            </tr>
                            <tr>
                                <th>Number</th>
                                <td><input type="text" name="people" value="{{ $confirm['people'] }}" readonly /></td>
                            </tr>
                        </table>
                    </div>
                    <div class="submit-btn">
                        <button class="rollback" type="submit" name="back" value="back">修正する</button>
                        <button class="reserve" type="submit">予約する</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- javascript for hamburger menu -->
    <script>
        const burger = document.querySelector('#burger');
        const menu = document.querySelector('#menu');

        if (burger) {
            burger.addEventListener('click', () => {
                burger.classList.toggle('is-active');
                menu.classList.toggle('is-active');
            })
        }
    </script>
</body>

</html>