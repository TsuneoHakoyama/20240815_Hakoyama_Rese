<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/book-complete.css">
</head>

<body>
    <main class="main">
        <!-- Menu-button and title-logo -->
        <div class="title-logo">
            <button class="burger" id="burger">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="logo">
                <a href="#">Rese</a>
            </div>
        </div>
        <nav class="menu" id="menu">
            <ul>
                <li><a href="{{ route('shop-all') }}">Home</a></li>
                <li><a href="{{ route('logout') }}">Logout</a></li>
                <li><a href="{{ route('mypage') }}">Mypage</a></li>
            </ul>
        </nav>

        <!-- Thanks message -->
        <div class="content">
            <div class="message">
                <p>ご予約ありがとうございます</p>
            </div>
            <div class="button">
                <a href="{{ route('back-home') }}">戻る</a>
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