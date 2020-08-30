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
                    <li class="breadcrumb-item active">Editar</li>
                </ol>

                <div class="card-body">
                    <form
                        action="{{ route('clientes.atualizar', $cliente->id) }}"
                        method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input
                                type="text"
                                name="nome"
                                class="form-control"
                                value="{{ $cliente->nome }}"
                                placeholder="Nome do cliente">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input
                                type="text"
                                name="email"
                                class="form-control"
                                value="{{ $cliente->email }}"
                                placeholder="Email do cliente">
                        </div>
                        <div class="form-group">
                            <label for="endereco">Endereço</label>
                            <input
                                type="text"
                                name="endereco"
                                class="form-control"
                                value="{{ $cliente->endereco }}"
                                placeholder="Endereço do cliente">
                        </div>
                        <button class="btn btn-info">Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

