@extends('layout.layout')
@section('title', 'Cadastro')

@section('cabecalho')
    Cadastro de Series
@endsection

@section('conteudo')
    <form action="" method="post">
        <label for="">Titulo: </label>
        <input type="text">
        <br><br>
        <label for="">Duração: </label>
        <input type="text">
        <br><br>
        <label for="">Atores: </label>
        <input type="text">
    </form>
@endsection

