<?php //LARAVEL #015 PASSAR DADOS DOS CONTROLLERS PARA AS VIEWS ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Home</h1>
    <?= $nome.' '.$sobrenome ?>
    <p>{{$nome}} {{$sobrenome}} {{$idade}}</p>
    <p>{{$telefones[1]}}</p>

    @foreach ($telefones as $telefone)
        <li>{{ $telefone }}</li>
    @endforeach
</body>
</html>