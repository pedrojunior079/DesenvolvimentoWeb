<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $nome = "PedroJr";
    $idade = 45;

    return view('welcome', ['nome' => $nome, 'idade' => $idade]);
});

Route::get('/contato', function(){
    return view('contato');
});

Route::get('/produtos', function(){
    return view('produtos');
});
