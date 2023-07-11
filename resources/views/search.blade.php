@extends('layouts.layout_empty')

@section('content')
    <div class="main">
        @if(empty($posts))
            <div class="main">
                <div class="message-box">
                    <div class="text-box">Ничего не найдено...</div>
                </div>
            </div>

        @else
            @foreach($posts as $post)

                <div class="main-container">

                    <div class="accordion base">


                        <div class="accordion-header">

                            <div class="label">{{ $post->question }}</div>

                        </div>

                        <div class="accordion-body">
                            @if($post->note != null)

                                <div class="note">
                                    <pre>{{ $post->note }}</pre>
                                </div>

                            @endif

                            @if($post->code != null)

                                <div class="code">
                                    <pre><code>{{ $post->code }}</code></pre>
                                </div>

                            @endif

                        </div>

                        @auth()

                            <div class="edit_menu_wrapper">

                                <nav class="edit_menu_wide" id="edit_menu{{$post->id}}">

                                    <div class="edit_menu_item">

                                        <a href="{{ route($route_name . ".up", $post->id) }}"
                                           class="nav-link pe-2"><i
                                                class="fa-solid fa-circle-chevron-up ms-2"></i></a>

                                    </div>

                                    <div class="edit_menu_item">

                                        <a href="{{ route($route_name . ".down", $post->id) }}"
                                           class="nav-link pe-2"><i
                                                class="fa-solid fa-circle-chevron-down ms-2"></i></a>

                                    </div>

                                    <div class="edit_menu_item">

                                        <a href="{{ route($route_name . ".edit", $post->id) }}"
                                           class="nav-link pe-2"><i
                                                class="fa-solid fa-pen-to-square ms-2"></i></a>

                                    </div>

                                    <div class="edit_menu_item">

                                        <a href="{{ route($route_name . ".delete", $post->id) }}"
                                           data-method="delete"
                                           class="nav-link"><i class="fa-solid fa-trash ms-2 me-2"></i></a>

                                    </div>

                                </nav>


                                <button class="edit-burger" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseExample{{ $post->id }}"
                                        aria-expanded="false" aria-controls="collapseExample{{ $post->id }}"
                                        id="edit-burger{{$post->id}}">

                                    <div class="edit-burger-line"></div>
                                    <div class="edit-burger-line"></div>
                                    <div class="edit-burger-line"></div>

                                </button>

                                <nav class="edit_menu" id="edit_menu{{$post->id}}">

                                    <div class="edit_menu_item">

                                        <a href="{{ route($route_name . ".up", $post->id) }}"
                                           class="nav-link pe-2"><i
                                                class="fa-solid fa-circle-chevron-up ms-2"></i></a>

                                    </div>

                                    <div class="edit_menu_item">

                                        <a href="{{ route($route_name . ".down", $post->id) }}"
                                           class="nav-link pe-2"><i
                                                class="fa-solid fa-circle-chevron-down ms-2"></i></a>

                                    </div>

                                    <div class="edit_menu_item">

                                        <a href="{{ route($route_name . ".edit", $post->id) }}"
                                           class="nav-link pe-2"><i
                                                class="fa-solid fa-pen-to-square ms-2"></i></a>

                                    </div>

                                    <div class="edit_menu_item">

                                        <a href="{{ route($route_name . ".delete", $post->id) }}"
                                           data-method="delete"
                                           class="nav-link"><i class="fa-solid fa-trash ms-2 me-2"></i></a>

                                    </div>

                                </nav>

                            </div>

                        @endauth

                    </div>

                </div>

            @endforeach

            <div class="pagination">{{ $posts->links() }}</div>
        @endif


    </div>
@endsection
