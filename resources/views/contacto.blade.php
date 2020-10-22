@extends('layout')
@section('titulo')
contacto
@section('header')
contacto
@endsection
@endsection
@section('conteudo')
    <form method="post" action="{{route('processar.form')}}">
        @csrf
    <label for="name"> Nome </label>
    <input type="text" name="nome">
    <label for="morada"> Morada</label>
    <input type="text" name="morada">
    <label for="automovel"> Automovel </label>
    <select name="automovel">
        <option value="volvo"> Volvo </option>
        <option value="saab"> Saab </option>
        <option value="mercedes"> Mercedes </option>
        <option value="audi"> Audi </option>
    </select>
    <button type="submit"> enviar </button>
    </form>
@endsection