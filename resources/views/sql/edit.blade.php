@extends('layouts.edit.layout', ['type' => 'sql'])

{{--Активная ссылка в меню--}}
@section('sql')
    active
@endsection


{{--определяет роуты для линков (вверх, вниз, редактировать, удалить--}}
@section('type')
    {{ 'sql' }}
@endsection
