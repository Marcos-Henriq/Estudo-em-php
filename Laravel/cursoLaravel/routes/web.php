<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
AQUI QUE SE CRIA ROTAS DE ACESSO AS PAGINAS.
|
*/


// INDEX

Route::get('/', function () {
    $nome = 'Marcos';
    $idade = 18;
    $profissao = 'Estágiario';
    $array = [1, 2, 3, 4, 5];
    $nomes = ['Matheus', 'Marcos', 'Cristiano', 'Ronaldo'];

    return view('welcome', [
        'nome' => $nome,
        'idade' => $idade,
        'profissao' => $profissao,
        'array' => $array,
        'nomes' => $nomes
    ]);
});


// OUTRAS PAGIINAS

Route::get('/contact', function () { //POR ONDE O USUARIO ACESSA
    return view('contact'); // E OQ RETORNA = contact.blade.php
});

Route::get('/produtos', function () {
    return view('product');
});
