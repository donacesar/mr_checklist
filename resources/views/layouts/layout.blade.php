<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet"
          href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/atom-one-dark.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>


    <link rel="stylesheet" href="{{asset('icons.css')}}">

    <title>{{ config('app.name') }}</title>
</head>
<body class="d-flex flex-column h-100">
<div class="container w-75 .bg-secondary">

@include('includes.header')

@include('includes.form_new')

@include('includes.main')

@include('includes.footer')

</div>
</body>
</html>
