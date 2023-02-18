@extends('layouts.edit.layout', ['type' => 'sql'])

{{--Определяет активную ссылку в меню--}}
@section('sql')
    active
@endsection

{{--Определяет часть имени роутов для линков (вверх, вниз, редактировать, удалить--}}
@section('type')
    {{ 'sql' }}
@endsection
