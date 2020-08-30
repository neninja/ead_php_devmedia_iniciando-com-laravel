@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <ol class="breadcrumb card-header">
                    <li class="breadcrumb-item">
                        <a href="{{ route('clientes.index') }}">Clientes</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('clientes.detalhe', $telefone->cliente->id) }}">Detalhe</a>
                    </li>
                    <li class="breadcrumb-item active">Editar</li>
                </ol>

                <div class="card-body">
                    <form action="{{ route('telefones.atualizar', $telefone->id) }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put">
                        <div class="form-group">
                            <label for="titulo">Título</label>
                            <input
                                type="text"
                                name="titulo"
                                class="form-control"
                                value="{{ $telefone->titulo }}"
                                placeholder="Título do telefone">
                        </div>
                        <div class="form-group">
                            <label for="telefone">Número</label>
                            <input
                                type="text"
                                name="telefone"
                                class="form-control"
                                value="{{ $telefone->telefone }}"
                                placeholder="Número do telefone">
                        </div>
                        <button class="btn btn-info">Atualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

