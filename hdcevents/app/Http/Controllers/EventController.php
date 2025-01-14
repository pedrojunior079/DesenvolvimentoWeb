<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $nome = "PedroJr";
        $idade = 45;
        $arr = [10,20,30,40,50];

        $nomes = ['João', 'Maria', 'Carlos', 'Saulo' ]; 
    
        return view('welcome', 
           [
               'nome' => $nome, 
               'idade' => $idade, 
               'profissão' => 'Programador',
               'arr' => $arr,
               'nomes' => $nomes
           ]);
    }

    public function create()
    {
        return view('events.create');
    }
}
