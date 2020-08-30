<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cliente;
use App\Telefone;

class TelefoneController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adicionar($id)
    {
        $cliente = Cliente::find($id);
        return view('telefone.adicionar', compact('cliente'));
    }

    public function salvar(\App\Http\Requests\TelefoneRequest $request, $id)
    {
        $telefone = new Telefone();
        $telefone->titulo = $request->input('titulo');
        $telefone->telefone = $request->input('telefone');

        Cliente::find($id)->addTelefone($telefone);

        \Session::flash('flash_message', [
            'msg' => 'Telefone adicionado com sucesso',
            'class' => 'alert-success'
        ]);
        return redirect()->route('clientes.detalhe', $id);
    }

    public function editar($id)
    {
        $telefone = Telefone::find($id);
        if(!$telefone){
            \Session::flash('flash_message', [
                'msg' => 'Não existe esse telefone cadastrado, adicione-o',
                'class' => 'alert-danger'
            ]);
            return redirect()->route('clientes.detalhe', $telefone->cliente->id);
        }
        return view('telefone.editar', compact('telefone'));
    }

    public function atualizar(\App\Http\Requests\TelefoneRequest $request, $id)
    {
        $telefone = Telefone::find($id);
        $telefone->update($request->all());

        \Session::flash('flash_message', [
            'msg' => 'Telefone atualizado com sucesso',
            'class' => 'alert-success'
        ]);

        return redirect()->route('clientes.detalhe', $telefone->cliente->id);
    }

    public function deletar($id)
    {
        $telefone = Telefone::find($id);
        $telefone->delete();

        \Session::flash('flash_message', [
            'msg' => 'Telefone deletado com sucesso',
            'class' => 'alert-success'
        ]);
        return redirect()->route('clientes.detalhe', $telefone->cliente->id);
    }
}
