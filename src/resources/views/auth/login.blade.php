<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/login.css">
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
                <li><a href="{{!! '/' !!}}">Home</a></li>
                <li><a href="{{!! '/register' !!}}">Registration</a></li>
                <li><a href="{{!! '/login' !!}}">Login</a></li>
            </ul>
        </nav>

        <!-- Login window -->
        @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="login-window">
            <div class="title-area">
                <p>Login</p>
            </div>
            <div class="content">
                <form action="/login" method="post">
                    @csrf
                    <div class="input-form">
                        <div class="input__email">
                            <i class="fa-solid fa-envelope"></i>
                            <input class="email" type="email" name="email" value="{{ old('email') }}" placeholder="Email">
                        </div>
                        <div class="input__password">
                            <i class="fa-solid fa-lock"></i>
                            <input class="password" type="password" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="submit-button">
                        <button class="login-btn" type="submit">ログイン</button>
                    </div>
                </form>
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