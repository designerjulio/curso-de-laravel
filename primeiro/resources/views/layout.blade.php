<?php //LARAVEL #016 INTRODUÇÃO AO BLADE E À CONSTRUÇÃO DE BLADE LAYOUTS ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('navegacao')

    @yield('teste')
    @yield('conteudo')

    @include('footer')
</body>
</html>