<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop-detail</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/shop-detail.css">
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
                            <li><a href="{{ '/mypage' }}">Mypage</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="shop-info">
                    @foreach ($details as $obj)
                    <div class="back-btn">
                        <a href="{{ route('shop-all') }}">&lt;</a>
                    </div>
                    <div class="shop-name">
                        <p>{{ $obj->name }}</p>
                    </div>
                </div>
                <div class="shop-card">
                    <div class="shop-image">
                        <img src="{{ $obj->image }}" alt="店舗画像">
                    </div>
                    <div class="shop-tag">
                        <div class="area-tag">#{{ $obj->prefecture->name }}</div>
                        <div class="genre-tag">#{{ $obj->genre->name }}</div>
                    </div>
                    <div class="introduction">
                        <p>{{ $obj->detail }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="booking-form">
                <div class="title">
                    <p>予約</p>
                </div>
                <form action="">
                    <div class="input-form">
                        <div class="input__date">
                            <input type="date" name="date" id="" value="2024-07-20">
                        </div>
                        <div class="input__time">
                            <select name="time" id="">
                                <option value="17:00" selected>17:00</option>
                            </select>
                        </div>
                        <div class="input__people">
                            <select name="people" id="">
                                <option value="1" selected>1人</option>
                            </select>
                        </div>
                    </div>
                    <div class="confirm-window">
                        <table class="description">
                            <tr>
                                <th>Shop</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Time</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Number</th>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                    <div class="submit-btn">
                        <button type="submit">予約する</button>
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