@extends('layouts.layout_min')


@section('content')
    @if(session('flash.message'))
        <div class="alert alert-{{ session('flash.type') }}" role="alert">
            {{ session('flash.message') }}
        </div>
    @endif
@endsection


@section('map')
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A91df8e319071da4492bc9ee4d195ddad64c5caabdceeea14a669432781c6b6a1&amp;width=500&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
@endsection

