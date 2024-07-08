<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop-detail</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/shop-detail.css') }}">
</head>

<body>
    <div class="main-board">
        <div class="detail-board">
            <div class="menu">
                <div class="menu__button">
                    <a href="" class="menu">menu</a>
                </div>
                <div class="title-logo">
                    <p class="logo">Rese</p>
                </div>
                <div class="shop-info">
                    <div class="back-button">
                        <a href="http://"> < </a>
                    </div>
                    <div class="shop-name">
                        name
                    </div>
                    <div class="shop-image">
                        <img src="" alt="">
                    </div>
                    <div class="shop-description">
                        text
                    </div>
                </div>
            </div>
        </div>
        <div class="booking-board">
            <p class="title">予約</p>
            <form action="" method="post">
                <div class="input-form">
                    <input type="date" class="date">
                    <input type="datetime" class="time">
                    <input type="text" class="people">
                </div>
                <table class="info-table">
                    <tr>
                        <th>Shop</th>
                        <td>name</td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td>date</td>
                    </tr>
                    <tr>
                        <th>Time</th>
                        <td>datetime</td>
                    </tr>
                    <tr>
                        <th>Number</th>
                        <td>people</td>
                    </tr>
                </table>
                <div class="btn__submit">
                    <button type="submit">予約する</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>