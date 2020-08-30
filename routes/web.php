<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/clientes', 'ClienteController@index')->name('clientes.index');

Route::get('/clientes/adicionar', 'ClienteController@adicionar')
    ->name('clientes.adicionar');
Route::post('/clientes/salvar', 'ClienteController@salvar')
    ->name('clientes.salvar');

Route::get('/clientes/editar/{id}', 'ClienteController@editar')
    ->name('clientes.editar');
Route::put('/clientes/atualizar/{id}', 'ClienteController@atualizar')
    ->name('clientes.atualizar');

Route::get('/clientes/deletar/{id}', 'ClienteController@deletar')
    ->name('clientes.deletar');

Route::get('/clientes/detalhe/{id}', 'ClienteController@detalhe')
    ->name('clientes.detalhe');

Route::get('/telefones/adicionar/{id}', 'TelefoneController@adicionar')
    ->name('telefones.adicionar');
Route::post('/telefones/salvar/{id}', 'TelefoneController@salvar')
    ->name('telefones.salvar');
