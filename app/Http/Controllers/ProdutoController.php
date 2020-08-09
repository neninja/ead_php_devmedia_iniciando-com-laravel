<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        $produto = [
            'nome' => 'livro'
        ];
        // return view('produto.index', $produto); // produto/index.blade.php
        return view('produto.index', compact('produto')); // produto/index.blade.php
    }
    //public function getIndex(){
    //    return "Produto index";
    //}

    //public function getLista(){
    //    return "Produto lista";
    //}
}
