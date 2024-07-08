<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__logo">
                <div class="menu__button">
                    <a href="" class="menu">menu</a>
                </div>
                <div class="title-logo">
                    <p class="logo">Rese</p>
                </div>
            </div>
            <div class="search__box">
                @yield('search-box')
            </div>
        </div>
    </header>

    <main class="main__board">
        @yield('content')
    </main>
</body>

</html>