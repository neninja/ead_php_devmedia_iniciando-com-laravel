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

Route::get('/', function () {
    return view('welcome');
});

Route::get('aluno', 'Aluno\AlunoController@index');

Route::get('livro/lista', [
    'uses' => 'LivroController@index',
    'as' => 'livro.index'
]);

// deprecated: https://github.com/laravel/framework/issues/10971#issuecomment-249171540
// Route::controller('produto', 'ProdutoController');

/*
Route::get('contato', function () {
    return 'Página de contato';
});

Route::post('contato', function () {
    return 'Realiza um post';
});

Route::put('contato', function () {
    return 'Realiza um put';
});

Route::delete('contato', function () {
    return 'Realiza um delete';
});

Route::match(['get', 'post'], 'sobre', function () {
    return 'trabalhando com match';
});

Route::any('todos', function () {
    return 'trabalhando com todos verbos http';
});

Route::get('artigos/{id}', function ($id) {
    return "Artigo: {$id}";
});

Route::get('produtos/{id?}', function ($id = null) {
    return "Produto: {$id}";
});

Route::get('teste', ['as' => 'detalhe', function () {
    return 'Página com alias para ' . route('detalhe');
}]);

Route::group(['prefix' => 'admin'], function(){
    Route::get('contato', function () {
        return 'Página de admin/contato';
    });
    Route::get('sobre', function () {
        return 'Página de admin/sobre';
    });
});
 */
