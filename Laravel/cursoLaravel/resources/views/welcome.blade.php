<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>

    <h1>MESSI</h1>
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