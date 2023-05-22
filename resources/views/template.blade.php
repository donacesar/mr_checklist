<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template</title>
    <link rel="stylesheet" href="{{ asset('/style.css') }}">
</head>
<body>
<div class="container">
    <header class="header">
        <div class="header-container">

            <a class="logo" href="{{ route('home') }}">{{ config('app.name') }}</a>

            <button type="button" class="burger" id="main-burger">
                <div class="burger-line"></div>
                <div class="burger-line"></div>
                <div class="burger-line"></div>
            </button>
            <div class="all-menu" id="all-menu">
                <div class="menu">
                    <a href="" class="menu-item">SQL</a>
                    <a href="" class="menu-item">Git</a>
                    <a href="" class="menu-item">PHP</a>
                    <a href="" class="menu-item">RegExp</a>
                    <a href="" class="menu-item">Docker</a>
                    <a href="" class="menu-item">Laravel</a>
                    <a href="" class="menu-item">Linux</a>
                </div>
                <div class="login">
                    @guest()
                        <div>
                            <form action="{{ route('login') }}" method="get">
                                <button type="submit" class="">Войти</button>
                            </form>
                        </div>
                    @endguest
                    @auth()
                        <div>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="">Выйти</button>
                            </form>
                        </div>
                    @endauth
                </div>
            </div>
        </div>

    </header>

    <main class="main">
        main
    </main>
    <footer class="footer">
        <div class="copyright">
            © {{date('Y')}} Copyright: {{ config('app.name') }}
        </div>
    </footer>
</div>

<script src="{{ asset('/burger-menu.js') }}"></script>
</body>
</html>
