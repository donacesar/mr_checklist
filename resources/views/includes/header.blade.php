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
                <div class="menu-row">
                    <a href="{{ route('sql.index') }}"
                       class="menu-item {{ active_link('sql.index' , 'active-link') }}">SQL</a>
                </div>

                <div class="menu-row">
                    <a href="{{ route('git.index') }}"
                       class="menu-item {{ active_link('git.index' , 'active-link') }}">Git</a>
                </div>

                <div class="menu-row drop-position">
                    <a href="#" class="menu-item drop-menu {{ active_link(['phpArray.index', 'phpString.index'], 'active-link') }}">PHP
                        <i class="fa fa-caret-down"></i></a>
                    <div class="drop-item">
                        <a class="menu-item {{ active_link('phpArray.index', 'active-link') }}"
                           href="{{ route('phpArray.index') }}">Массивы (array)</a>
                        <a class="menu-item {{ active_link('phpString.index', 'active-link' )}}"
                           href="{{ route('phpString.index') }}">Строки (string)</a>
                    </div>
                </div>

                <div class="menu-row">
                    <a href="{{ route('regexp.index') }}"
                       class="menu-item {{ active_link('regexp.index' , 'active-link') }}">RegExp</a>
                </div>
                <div class="menu-row">
                    <a href="{{ route('docker.index') }}"
                       class="menu-item {{ active_link('docker.index' , 'active-link') }}">Docker</a>
                </div>
                <div class="menu-row">
                    <a href="{{ route('laravel.index') }}"
                       class="menu-item {{ active_link('laravel.index' , 'active-link') }}">Laravel</a>
                </div>
                <div class="menu-row drop-position">
                    <a class="menu-item drop-menu {{ active_link(['linux.index', 'apache.index', 'nginx.index'], 'active-link') }}">Linux
                        <i class="fa fa-caret-down"></i></a>
                    <div class="drop-item">
                        <a class="menu-item {{ active_link('linux.index', 'active-link') }}"
                           href="{{ route('linux.index') }}">Linux</a>

                        <hr class="drop-hr">

                        <a class="menu-item {{ active_link('apache.index', 'active-link' )}}"
                           href="{{ route('apache.index') }}">Apache</a>

                        <a class="menu-item {{ active_link('nginx.index', 'active-link' )}}"
                           href="{{ route('nginx.index') }}">Nginx</a>

                    </div>
                </div>
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
