<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $nome = "Matheus";
    $idade = 10;
    $arr = [1,2,3,4,4,5,5,5,2];
    return view('welcome',['nome'=> $nome,'idade'=>$idade,'arr'=>$arr]);
});

Route::get('/contato',function(){
    return view('contact');
});

Route::get('/products',function(){
    return view('product');
});

Route::get('/produtos/{id?}',function($id = null){
    // query params
    // /?search=Valor
    $busca = request('search');
    return view('products',['id' => $id,'busca' => $busca]);
});

