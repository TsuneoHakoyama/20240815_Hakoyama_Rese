<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/register.css">
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
                <p>Registration</p>
            </div>
            <div class="content">
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="input-form">
                        <div class="input__username">
                            <i class="fa-solid fa-user"></i>
                            <input class="username" type="text" name="name" value="{{ old('name') }}" placeholder="Username">
                        </div>
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
                        <button class="login-btn" type="submit">登録</button>
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