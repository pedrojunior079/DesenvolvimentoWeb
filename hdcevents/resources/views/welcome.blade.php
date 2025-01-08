<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <h1>Bem vindo ao Laravel</h1>
        <img src="/img/banner.jpg" alt="Banner">
        @if(10 < 15)
          <p>A condição é true</p>
        @endif
        
        <p>{{$nome}}</p>

        @if($nome == "PedroJr")
        <p>O nome é {{$nome}} e ele tem {{$idade}} anos</p>
        @else
        <p>O nome não é PedroJr</p>
        @endif

        @for($i = 0; $i < count($arr); $i++)
             <p>{{$arr[$i]}} - {{$i}}</p>
             @if($i == 2)
             <p>O i é 2</p>
             @endif
        @endfor
       

        @php
          $nome = "João";
          echo $nome; 
        @endphp
        <!-- comentário do HTML -->
        {{-- comentário do Blade --}}
    </body>
</html>
