<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    {{-- LINKANDO CSS  --}}
    <link rel="stylesheet" href="/css/styles.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->

</head>

<body>

    <h1>MESSI</h1>
    <!-- <img src="/img/banner.jpg"> -->
    @if(5<7) <!-- condicionais dinâmicas direto no cod html, <!-- onde se a condição for verdadeira o sistema retorna o que tem dentro da condicional-->
        <p>Verdade</p>
        @endif
        <h1>{{ $nome }}</h1>
        @if($nome == 'Marcos')
        <p>é o {{$nome}} e idade de {{$idade}} anos e trabalha com {{$profissao}}</p>
        @else
        <p>não é o maicu :(</p>
        @endif

        @for($i = 0;$i < count($array);$i++) <p>{{$array[$i]}}</p>
            @if($array[$i] == 3)
            <p>É o 3</p>
            @endif
            @endfor


            @foreach($nomes as $nome)
            <p> {{$loop->index}}</p>
            <p>{{$nome}}</p>
            @endforeach

            @php
            $name = 'João';
            echo $name;
            @endphp


            {{-- ASSIM QUE SE FAZ UM COMENTARIO NO BLADE --}}


</body>

</html>