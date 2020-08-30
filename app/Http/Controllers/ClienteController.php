<?php

namespace App\Http\Controllers;

use App\Cliente;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clientes = \App\Cliente::paginate(15);
        return view('cliente.index', compact('clientes'));
    }

    public function adicionar()
    {
        return view('cliente.adicionar');
    }

    public function salvar(Request $request)
    {
        Cliente::create($request->all());

        \Session::flash('flash_message', [
            'msg' => 'Cliente adicionado com sucesso',
            'class' => 'alert-success'
        ]);
        return redirect()->route('clientes.adicionar');
    }
}
