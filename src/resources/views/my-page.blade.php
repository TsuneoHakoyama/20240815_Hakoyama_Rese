<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My_page</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/mypage.css">
</head>

<body>
    <div class="main-content">
        <div class="book-status">
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
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Logout</a></li>
                        <li><a href="#">Mypage</a></li>
                    </ul>
                </nav>
            </div>
            <div class="column-title">
                予約状況
            </div>
            <div class="book-card">
                <div class="card-header">
                    <div class="header__inner">
                        <div class="favicon">
                            <i class="fa-regular fa-clock clock-custom"></i>
                        </div>
                        <div class="title">
                            予約1
                        </div>
                    </div>
                    <div class="cancel-btn">
                        <button type="submit">
                            <i class="fa-regular fa-circle-xmark xmark-custom"></i>
                        </button>
                    </div>
                </div>
                <div class="confirm-window">
                    <table class="description">
                        <tr>
                            <th>Shop</th>
                            <td>店舗名</td>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td>日時</td>
                        </tr>
                        <tr>
                            <th>Time</th>
                            <td>時間</td>
                        </tr>
                        <tr>
                            <th>Number</th>
                            <td>人数</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="my-favorite">
            <div class="user-name">
                testさん
            </div>
            <div class="list-title">
                お気に入り店舗
            </div>
            <div class="grid">
                <div class="shop-card">
                    <div class="shop-image">
                        <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt="店舗画像">
                    </div>
                    <div class="shop-info">
                        <div class="shop-name">仙人</div>
                        <div class="shop-tag">
                            <div class="area-tag">#東京都</div>
                            <div class="genre-tag">#寿司</div>
                        </div>
                        <div class="more-info">
                            <div class="for-detail">
                                <a href="">詳しくみる</a>
                            </div>
                            <div class="favorite">
                                <i class="fa-solid fa-heart heart-custom"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shop-card">
                    <div class="shop-image">
                        <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt="店舗画像">
                    </div>
                    <div class="shop-info">
                        <div class="shop-name">仙人</div>
                        <div class="shop-tag">
                            <div class="area-tag">#東京都</div>
                            <div class="genre-tag">#寿司</div>
                        </div>
                        <div class="more-info">
                            <div class="for-detail">
                                <a href="">詳しくみる</a>
                            </div>
                            <div class="favorite">
                                <i class="fa-solid fa-heart heart-custom"></i>
                            </div>
                        </div>
                    </div>
                </div>
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