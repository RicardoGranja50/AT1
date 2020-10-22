@extends('layout')
@section('titulo')
A minha APP 
@endsection
@section('header')
Bem vindo 
@endsection
@section('conteudo')
<h2>Caro visitante,</h2>
<h1>seja bem-vindo</h1>
<p>Esta é uma página feito em Blade...</p>

<a href="{{route('equipas.lista')}}"> ver equipas </a>
<br>
<br>
<img src="{{asset('imagens/benfica.png')}}">
@endsection