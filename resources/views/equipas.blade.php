@extends('layout')
@section('titulo')
Equipas do torneio 
@endsection
@section('header')
Equipas
@endsection
@section('conteudo')
@if(isset($equipas))
    <h1>Lista de equipas:</h1>
    @foreach($equipas as $equipa)
        <h2>{{$equipa}}</h2>
    @endforeach
@elseif(isset ($ajudar))
    <h2> {{$ajudar}} não é aceite</h2>
@else
    <h1>So uma equipa</h1>
    <h2>{{$equipa}}</h2>
@endif

<a href="{{route('equipas.index')}}"> pagina principal </a>
@endsection