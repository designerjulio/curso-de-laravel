{{-- LARAVEL #017 BLADE COMENTÁRIOS, APRESENTAÇÃO DE DADOS E EXECUÇÃO DE PHP --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$titulo}}</title>
</head>
<body>
    <p>{{$texto}}</p>
    <p>{{rand(1,100)}}</p>
    <a href="{{route('minha_route')}}">Link</a>

    @php
        $nome = "Julio";
        echo "O meu nome é $nome";
    @endphp
</body>
</html>