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

// Route::get('/', function () {
//     return view('Olá, seja bem-vindo ao sistema de orçamento');
// });

Route::get('/', 'PrincipalController@principal')->name('site.index');

Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobre-nos');

Route::get('/contato', 'ContatoController@contato')->name('site.contato');

Route::get('/login', function () {
    return 'login';
})->name('site.login');


Route::prefix('app')->group(function () {
    Route::get('/clientes', function () {
        return 'clientes';
    })->name('app.clientes');

    Route::get('/fornecedores', function () {
    return 'fornecedores';
    })->name('app.fornecedores');

    Route::get('/produtos', function () {
        return 'produtos';
    })->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('site.teste');

Route::fallback(function () {
    return 'Página não encontrada, clique aqui para ir para página inicial <a href="'.route('site.index').'">Página Inicial</a>';
});

