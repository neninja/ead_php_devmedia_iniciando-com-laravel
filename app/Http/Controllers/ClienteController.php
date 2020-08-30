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
        $clientes = Cliente::paginate(15);
        return view('cliente.index', compact('clientes'));
    }

    public function detalhe($id)
    {
        $cliente = Cliente::find($id);
        return view('cliente.detalhe', compact('cliente'));
    }

    public function adicionar()
    {
        return view('cliente.adicionar');
    }

    public function salvar(\App\Http\Requests\ClienteRequest $request)
    {
        Cliente::create($request->all());

        \Session::flash('flash_message', [
            'msg' => 'Cliente adicionado com sucesso',
            'class' => 'alert-success'
        ]);
        return redirect()->route('clientes.adicionar');
    }

    public function editar($id)
    {
        $cliente = Cliente::find($id);
        if(!$cliente){
            \Session::flash('flash_message', [
                'msg' => 'Não existe esse cliente cadastrado, adicione-o',
                'class' => 'alert-danger'
            ]);
            return redirect()->route('clientes.adicionar');
        }
        return view('cliente.editar', compact('cliente'));
    }

    public function atualizar(\App\Http\Requests\ClienteRequest $request, $id)
    {
        $cliente = Cliente::find($id)->update($request->all());

        \Session::flash('flash_message', [
            'msg' => 'Cliente atualizado com sucesso',
            'class' => 'alert-success'
        ]);

        return redirect()->route('clientes.index');
    }

    public function deletar($id)
    {
        // para evitar erros de integridade com o bd, primeiro tem que apagar
        // os telefones. 1 Cliente pode ter N telefones (1:N)
        $cliente = Cliente::find($id);

        if(!$cliente->deletarTelefones()){
            \Session::flash('flash_message', [
                'msg' => 'Registro não pode ser deletado',
                'class' => 'alert-danger'
            ]);
            return redirect()->route('clientes.index');
        }

        $cliente->delete();

        \Session::flash('flash_message', [
            'msg' => 'Cliente deletado com sucesso',
            'class' => 'alert-success'
        ]);
        return redirect()->route('clientes.index');
    }
}
