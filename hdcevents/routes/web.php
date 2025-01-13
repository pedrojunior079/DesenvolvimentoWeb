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
    
    $busca = request('search');

    return view('produtos', ['busca' => $busca]);
});

Route::get('/produtos_teste/{id?}', function($id = null){
    return view('produto', ['id' => $id]);
});

