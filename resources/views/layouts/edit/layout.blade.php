<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="icons.css">

    <title>{{ config('app.name') }}</title>
</head>
<body class="d-flex flex-column h-100">

@include('includes.header')

@include('includes.form_edit')

@include('includes.footer')


</body>
</html>
