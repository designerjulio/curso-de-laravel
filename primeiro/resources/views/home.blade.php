{{-- LARAVEL #018 BLADE IF ELSEIF, UNLESS, ISSET, EMPTY E SWITCH --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$titulo}}</title>
</head>
<body>
    @if($valor == 100)
        <p>igual a 100</p>
    @elseif($valor < 100)
        <p>menor que 100</p>
    @else
        <p>maior que 100</p>
    @endif

    @unless($valor == 100)
        <p>teste</p>
    @endunless

    @isset($valor)
        <p>Sim, existe</p>
    @endisset

    @empty($nome)
        <p>Está vazia</p>
    @endempty

    @switch($valor)
    @case(100)
        Igual a 100
        @break

    @case(10)
        Igual a 10
        @break

    @default
        Outro valor
@endswitch

</body>
</html>