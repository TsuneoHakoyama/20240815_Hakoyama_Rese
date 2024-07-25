<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop_all</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/shop-all.css">
</head>

<body>
    <main class="main">
        <div class="header">
            <!-- Menu-button and title-logo -->
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
                        <li><a href="{{!! '/' !!}}">Home</a></li>
                        <li><a href="{{ route('logout') }}">Logout</a></li>
                        <li><a href="{{!! '/mypage' !!}}">Mypage</a></li>
                    </ul>
                </nav>
            </div>
            <form action="" method="post" class="search-box">
                <div class="input-form">
                    <div class="select-area">
                        <select name="area" id="" place>
                            <option value="" selected>All area</option>
                        </select>
                    </div>
                    <div class="select-genre">
                        <select name="genre" id="">
                            <option value="" selected>All genre</option>
                        </select>
                    </div>
                    <div class="glass">
                        <i class="fa-solid fa-magnifying-glass glass-custom"></i>
                    </div>
                    <div class="search-word">
                        <input type="text" name="word" placeholder="Search ..." id="">
                    </div>
                    <div class="search-btn">
                        <button type="submit">検索</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="main-content">
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
                        <div class="shop-name">店舗名</div>
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
                        <div class="shop-name">店舗名</div>
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
                        <div class="shop-name">店舗名</div>
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
                        <div class="shop-name">店舗名</div>
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
    </main>
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