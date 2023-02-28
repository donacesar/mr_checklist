@extends('layouts.layout_min')


@section('content')
    @if(session('flash.message'))
        <div class="alert alert-{{ session('flash.type') }}" role="alert">
            {{ session('flash.message') }}
        </div>
    @endif
@endsection
