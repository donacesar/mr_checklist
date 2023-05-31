<main class="main">


    @include('includes.form_new')
    @foreach($items as $item)

        <div class="main-container">

            <div class="accordion base">




                <div class="accordion-header">
                    <div class="label">{{ $item->question }}</div>
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
                @auth()
                    <div class="edit_menu_wrapper">
                        <div class="wide_screen">
                            <nav class="edit_menu_wide" id="edit_menu{{$item->id}}">

                                <div class="edit_menu_item"><a
                                        href="{{ route($route_name . ".up", $item->id) }}"
                                        class="nav-link pe-2"><i
                                            class="fa-solid fa-circle-chevron-up ms-2"></i></a></div>
                                <div class="edit_menu_item"><a
                                        href="{{ route($route_name . ".down", $item->id) }}"
                                        class="nav-link pe-2"><i
                                            class="fa-solid fa-circle-chevron-down ms-2"></i></a></div>
                                <div class="edit_menu_item"><a
                                        href="{{ route($route_name . ".edit", $item->id) }}"
                                        class="nav-link pe-2"><i
                                            class="fa-solid fa-pen-to-square ms-2"></i></a></div>
                                <div class="edit_menu_item"><a
                                        href="{{ route($route_name . ".delete", $item->id) }}"
                                        data-method="delete"
                                        class="nav-link"><i class="fa-solid fa-trash ms-2 me-2"></i></a>
                                </div>

                            </nav>

                        </div>


                        <button class="edit-burger" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseExample{{ $item->id }}"
                                aria-expanded="false" aria-controls="collapseExample{{ $item->id }}"
                                id="edit-burger{{$item->id}}">
                            <div class="edit-burger-line"></div>
                            <div class="edit-burger-line"></div>
                            <div class="edit-burger-line"></div>
                        </button>

{{--                        <div class="" id="collapseExample{{ $item->id }}">--}}
                            <nav class="edit_menu" id="edit_menu{{$item->id}}">

                                <div class="edit_menu_item"><a
                                        href="{{ route($route_name . ".up", $item->id) }}"
                                        class="nav-link pe-2"><i
                                            class="fa-solid fa-circle-chevron-up ms-2"></i></a></div>
                                <div class="edit_menu_item"><a
                                        href="{{ route($route_name . ".down", $item->id) }}"
                                        class="nav-link pe-2"><i
                                            class="fa-solid fa-circle-chevron-down ms-2"></i></a></div>
                                <div class="edit_menu_item"><a
                                        href="{{ route($route_name . ".edit", $item->id) }}"
                                        class="nav-link pe-2"><i
                                            class="fa-solid fa-pen-to-square ms-2"></i></a></div>
                                <div class="edit_menu_item"><a
                                        href="{{ route($route_name . ".delete", $item->id) }}"
                                        data-method="delete"
                                        class="nav-link"><i class="fa-solid fa-trash ms-2 me-2"></i></a>
                                </div>

                            </nav>
{{--                        </div>--}}

                    </div>
                @endauth
            </div>


        </div>
    @endforeach
    <div class="pagination">
        {{ $items->links() }}
    </div>

</main>
