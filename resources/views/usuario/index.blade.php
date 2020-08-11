@extends('layout.principal')
@section('titulo', 'Home')

@section('conteudo')
    <p>{{ $user }}</p>
    <p>{{ $lista }}</p>
@endsection
