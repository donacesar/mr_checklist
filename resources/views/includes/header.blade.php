<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-lg">
            <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link @yield('sql')" aria-current="page" href="{{ route('sql.index') }}">SQL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  @yield('git')" href="{{ route('git.index') }}">Git</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle @yield('php')" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            PHP
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Работа с массивами</a></li>
                            <li><a class="dropdown-item" href="#">Работа со строками</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('regexp')" href="#">RegExp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('docker')" href="#">Docker</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('laravel')" href="#">Laravel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('linux')" href="#">Linux</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Поиск..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Поиск</button>
                </form>
            </div>
        </div>
    </nav>
</header>
