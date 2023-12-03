@extends('layouts.layout_empty')

@section('content')
    <div class="main">
        @if(empty($posts))
            <div class="main">
                <div class="message-box">
                    <div class="text-box">Ничего не найдено</div>
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

                    </div>

                </div>

            @endforeach

            <div class="pagination">{{ $posts->links() }}</div>
        @endif
    </div>
@endsection
