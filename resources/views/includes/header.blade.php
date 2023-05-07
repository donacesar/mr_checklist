<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded-bottom">
        <div class="container-lg">
            <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ active_link('sql.index' , 'text-primary strong') }}" aria-current="page"
                           href="{{ route('sql.index') }}">SQL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ active_link('git.index', 'text-primary strong') }}"
                           href="{{ route('git.index') }}">Git</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ active_link(['phpString.index', 'phpArray.index'], 'text-primary strong') }}"
                           href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            PHP
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item {{ active_link('phpArray.index', 'dropdown_active') }}"
                                   href="{{ route('phpArray.index') }}">Работа с массивами</a></li>
                            <li><a class="dropdown-item {{ active_link('phpString.index', 'dropdown_active' )}}"
                                   href="{{ route('phpString.index') }}">Работа со строками</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ active_link('regexp.index', 'text-primary strong') }}"
                           href="{{ route('regexp.index') }}">RegExp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ active_link('docker.index', 'text-primary strong') }}"
                           href="{{ route('docker.index') }}">Docker</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ active_link('laravel.index', 'text-primary strong') }}"
                           href="{{ route('laravel.index') }}">Laravel</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ active_link(['linux.index', 'apache.index', 'nginx.index'], 'text-primary strong') }}"
                           href="#" id="navbarDropdown2" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Linux
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <li><a class="dropdown-item {{ active_link('linux.index', 'dropdown_active') }}"
                                   href="{{ route('linux.index') }}">Linux</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item {{ active_link('apache.index', 'dropdown_active' )}}"
                                   href="{{ route('apache.index') }}">Apache</a></li>

                            <li><a class="dropdown-item {{ active_link('nginx.index', 'dropdown_active' )}}"
                                   href="{{ route('nginx.index') }}">Nginx</a></li>
                        </ul>
                    </li>
                </ul>

                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Поиск..." aria-label="Search">
                    <button class="btn btn-outline-success me-2 " type="submit">Поиск</button>
                </form>
                @guest()
                    <div class="">
                        <a href="{{ route('login') }}"
                           class="link-primary">Войти</a>
                    </div>
                @endguest
                @auth()
                    <div class="">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="link-primary">Выйти</button>
                        </form>
                    </div>
                @endauth
            </div>
        </div>
    </nav>
</header>
