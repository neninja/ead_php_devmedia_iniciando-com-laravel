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
                    <li class="breadcrumb-item active">Detalhe</li>
                </ol>

                <div class="card-body">
                    <p><b>Cliente:</b> {{ $cliente->nome }}</p>
                    <p><b>E-mail:</b> {{ $cliente->email }}</p>
                    <p><b>Endereço:</b> {{ $cliente->endereco }}</p>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Título</td>
                                <td>Número</td>
                                <td>Ação</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cliente->telefones as $telefone)
                            <tr>
                                <th scope="row">{{ $telefone->id }}</th>
                                <td>{{ $telefone->titulo }}</td>
                                <td>{{ $telefone->telefone }}</td>
                                <td>
                                    <a
                                        class="btn btn-default">Editar</a>
                                    <a
                                        class="btn btn-danger">Deletar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <p>
                    <a class="btn btn-info" href="{{ route('telefones.adicionar', $cliente->id) }}">Adicionar telefone</a>
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

