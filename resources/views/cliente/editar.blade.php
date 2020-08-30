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
                                class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}"
                                value="{{ $cliente->nome }}"
                                placeholder="Nome do cliente">
                            @if($errors->has('nome'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('nome') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input
                                type="text"
                                name="email"
                                class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                value="{{ $cliente->email }}"
                                placeholder="Email do cliente">
                            @if($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="endereco">Endereço</label>
                            <input
                                type="text"
                                name="endereco"
                                class="form-control {{ $errors->has('endereco') ? 'is-invalid' : '' }}"
                                value="{{ $cliente->endereco }}"
                                placeholder="Endereço do cliente">
                            @if($errors->has('endereco'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('endereco') }}</strong>
                            </span>
                            @endif
                        </div>
                        <button class="btn btn-info">Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

