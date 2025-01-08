<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $nome = "PedroJr";
    $idade = 45;
    $arr = [10,20,30,40,50];
    
    return view('welcome', 
        [
            'nome' => $nome, 
            'idade' => $idade, 
            'profissão' => 'Programador',
            'arr' => $arr
        ]);

        $nomes = ['João', 'Maria', 'Carlos', 'Saulo' ];
});

Route::get('/contato', function(){
    return view('contato');
});

Route::get('/produtos', function(){
    return view('produtos');
});
