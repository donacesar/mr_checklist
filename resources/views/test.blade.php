<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Burger</title>

    <link rel="stylesheet" href="{{ asset('/burger.css') }}">
</head>
<body>
<div class="container">
    <button type="button" class="burger" id="burger">
        <div class="burger-line"></div>
        <div class="burger-line"></div>
        <div class="burger-line"></div>
    </button>
</div>

<script src="{{ asset('/burger.js') }}"></script>
</body>
</html>




