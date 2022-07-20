<?php

// criação de variaveis usasse $nomedaVariavel
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescentes';
$categorias[] = 'adulto';
$categorias[] = 'idoso';


$nome = 'Eduardo';
$idade = 18;

// var_dump($nome);
// var_dump($idade);

// inves de .length usar count()

if ($idade >= 6 && $idade <= 12) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'infantil') {
            echo ("O nadador " . $nome . " compete na categoria: " . $categorias[$i]);
        }
    }
} else if ($idade >= 13 && $idade < 18) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'adolescente') {
            echo ("O nadador " . $nome . " compete na categoria: " . $categorias[$i]);
        }
    }
} else {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'adulto') {
            echo ("O nadador " . $nome . " compete na categoria: " . $categorias[$i]);
        }
    }
}

// mostra a estrutura do elemento
// print_r($categorias);

// exibe na tela 
// print($categorias[2]);
// echo($categorias[2]);
?>
<!-- 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    
</body>
</html> -->