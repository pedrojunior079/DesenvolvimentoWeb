@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

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

@endsection
