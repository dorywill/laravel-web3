@extends('layout/layout')

@section('title', 'Produtos')
@section('cabecalho')
    Listagem de Produtos ({{ count($produtos) }} registros)
@endsection

@section('conteudo')

    @foreach ($produtos as $produto)
        @if($loop->first)
            Esse é o primeiro elemento: {{ $produto }}
        @endif

        @if($loop->last)
            Esse é o ultimo elemento: {{ $produto }}
        @endif

        <h5>{{ $produto }}</h5>
        Descrição produto ... <br>
        Data cadastro: {{ date('d/m/Y H:i:s') }}
        <br><br>

        
    @endforeach
   
    

@endsection