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
Route::get('/adicionar', 'ClienteController@adicionar')->name('clientes.adicionar');
Route::post('/salvar', 'ClienteController@salvar')->name('clientes.salvar');
