<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('/style.css') }}">

    <link rel="stylesheet"
          href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/atom-one-dark.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>


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
                    <a href="{{ route('sql.index') }}" class="menu-item">SQL</a>
                    <a href="{{ route('git.index') }}" class="menu-item">Git</a>
                    <a href="" class="menu-item">PHP</a>
                    <a href="{{ route('regexp.index') }}" class="menu-item">RegExp</a>
                    <a href="{{ route('docker.index') }}" class="menu-item">Docker</a>
                    <a href="{{ route('laravel.index') }}" class="menu-item">Laravel</a>
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
        @foreach($items as $item)
            <div class="main-container">
                <div class="accordion">
                    <div class="accordion-header">
                        {{ $item->question }}
                    </div>
                    <div class="accordion-body">
                        @if($item->note != null)
                        <div class="note">
                            <pre>{{ $item->note }}</pre>
                        </div>
                        @endif
                        @if($item->code != null)
                            <div class="code">
                                <pre><code>{{ $item->code }}</code></pre>
                            </div>
                        @endif

                    </div>
                </div>


                {{--                <div class="card">--}}
                {{--                    <div class="card-header edit_card">--}}
                {{--                        <div class="accordion accordion-flush" id="accordionFlush{{ $item->id }}">--}}
                {{--                            <div class="accordion-item">--}}
                {{--                                <div class="row">--}}
                {{--                                    <div class="col-9">--}}
                {{--                                        <h2 class="accordion-header" id="flush-heading-{{ $item->id }}">--}}
                {{--                                            <button class="accordion-button collapsed" type="button"--}}
                {{--                                                    data-bs-toggle="collapse"--}}
                {{--                                                    data-bs-target="#flush-collapse-{{ $item->id }}" aria-expanded="false"--}}
                {{--                                                    aria-controls="flush-collapse-{{ $item->id }}">--}}
                {{--                                                {{ $item->question }}--}}
                {{--                                            </button>--}}
                {{--                                        </h2>--}}
                {{--                                    </div>--}}
                {{--                                    @auth()--}}
                {{--                                        <div class="col-3 p-3">--}}
                {{--                                            <div class="wide_screen">--}}
                {{--                                                <nav class="edit_menu_wide" id="edit_menu{{$item->id}}">--}}

                {{--                                                    <div class="edit_menu_item"><a--}}
                {{--                                                            href="{{ route($route_name . ".up", $item->id) }}"--}}
                {{--                                                            class="nav-link pe-2"><i--}}
                {{--                                                                class="fa-solid fa-circle-chevron-up ms-2"></i></a></div>--}}
                {{--                                                    <div class="edit_menu_item"><a--}}
                {{--                                                            href="{{ route($route_name . ".down", $item->id) }}"--}}
                {{--                                                            class="nav-link pe-2"><i--}}
                {{--                                                                class="fa-solid fa-circle-chevron-down ms-2"></i></a></div>--}}
                {{--                                                    <div class="edit_menu_item"><a--}}
                {{--                                                            href="{{ route($route_name . ".edit", $item->id) }}"--}}
                {{--                                                            class="nav-link pe-2"><i--}}
                {{--                                                                class="fa-solid fa-pen-to-square ms-2"></i></a></div>--}}
                {{--                                                    <div class="edit_menu_item"><a--}}
                {{--                                                            href="{{ route($route_name . ".delete", $item->id) }}"--}}
                {{--                                                            data-method="delete"--}}
                {{--                                                            class="nav-link"><i class="fa-solid fa-trash ms-2 me-2"></i></a>--}}
                {{--                                                    </div>--}}

                {{--                                                </nav>--}}

                {{--                                            </div>--}}


                {{--                                            <button class="burger" type="button" data-bs-toggle="collapse"--}}
                {{--                                                    data-bs-target="#collapseExample{{ $item->id }}"--}}
                {{--                                                    aria-expanded="false" aria-controls="collapseExample{{ $item->id }}"--}}
                {{--                                                    id="burger{{$item->id}}">--}}
                {{--                                                <div class="burger-line"></div>--}}
                {{--                                                <div class="burger-line"></div>--}}
                {{--                                                <div class="burger-line"></div>--}}
                {{--                                            </button>--}}
                {{--                                            <div class="collapse" id="collapseExample{{ $item->id }}">--}}
                {{--                                                <nav class="edit_menu" id="edit_menu{{$item->id}}">--}}

                {{--                                                    <div class="edit_menu_item"><a--}}
                {{--                                                            href="{{ route($route_name . ".up", $item->id) }}"--}}
                {{--                                                            class="nav-link pe-2"><i--}}
                {{--                                                                class="fa-solid fa-circle-chevron-up ms-2"></i></a></div>--}}
                {{--                                                    <div class="edit_menu_item"><a--}}
                {{--                                                            href="{{ route($route_name . ".down", $item->id) }}"--}}
                {{--                                                            class="nav-link pe-2"><i--}}
                {{--                                                                class="fa-solid fa-circle-chevron-down ms-2"></i></a></div>--}}
                {{--                                                    <div class="edit_menu_item"><a--}}
                {{--                                                            href="{{ route($route_name . ".edit", $item->id) }}"--}}
                {{--                                                            class="nav-link pe-2"><i--}}
                {{--                                                                class="fa-solid fa-pen-to-square ms-2"></i></a></div>--}}
                {{--                                                    <div class="edit_menu_item"><a--}}
                {{--                                                            href="{{ route($route_name . ".delete", $item->id) }}"--}}
                {{--                                                            data-method="delete"--}}
                {{--                                                            class="nav-link"><i class="fa-solid fa-trash ms-2 me-2"></i></a>--}}
                {{--                                                    </div>--}}

                {{--                                                </nav>--}}
                {{--                                            </div>--}}

                {{--                                        </div>--}}
                {{--                                    @endauth--}}
                {{--                                </div>--}}
                {{--                                <div id="flush-collapse-{{ $item->id }}" class="accordion-collapse collapse"--}}
                {{--                                     aria-labelledby="flush-heading1" data-bs-parent="#accordionFlush{{ $item->id }}">--}}
                {{--                                    <div class="accordion-body">--}}
                {{--                                        <div class="container my-1">--}}
                {{--                                            <main class="flex-shrink-0">--}}
                {{--                                                @if($item->note != null)--}}
                {{--                                                    <div class="border p-1 bg-light">--}}
                {{--                                                        <pre>{{ $item->note }}</pre>--}}
                {{--                                                    </div>--}}
                {{--                                                @endif--}}
                {{--                                                @if($item->code != null)--}}
                {{--                                                    <div class="border p-1">--}}
                {{--                                                        <pre><code class="corner-round">{{ $item->code }}</code></pre>--}}
                {{--                                                    </div>--}}
                {{--                                                @endif--}}
                {{--                                            </main>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        @endforeach
                <div class=""">
                    {{ $items->links() }}
                </div>

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
