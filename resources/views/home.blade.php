@extends('layout.principal')

@section('titulo', 'Home')

@section('navbar')
@parent
    <p>nova navbar</p>
@endsection

@section('conteudo')
    <p>Aqui é o conteudo da home</p>

    {{-- @if(true) --}}
    {{-- @elseif(true) --}}
    {{-- @endif(true) --}}

    {{-- @while(true) --}}
    {{-- @endwhile --}}

    {{-- @for($i=0;$i==x;$i++) --}}
    {{-- @endfor --}}

    @foreach($usuarios as $usuario)
        <p>nome: {{ $usuario['nome'] }}</p>
    @endforeach

    <!-- executa o foreach somente se o array não estiver vazio -->
    @forelse($livros as $livro)
        <p>{{ $livro['nome'] }}</p>
    @empty
        <p>Sem registros</p>
    @endforelse
@endsection

