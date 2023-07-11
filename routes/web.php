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


Route::get('/sobreNos','SobreNosController@sobreNos')->name('site.sobrenos');

Route::get('/contato','ContatoController@contato')->name('site.contato');
Route::post('/contato','ContatoController@salvar')->name('site.contato');
Route::get('/','PrincipalController@principal')->name('site.index');

/*
Route::get('/contato/{nome}/{categoria?}', function(string $nome, string $categoria = null){
    echo "Variaveis, Nome:".$nome." e Categoria: ".$categoria;
})->where('nome','[A-Za-z]+');
*/

Route::get('/login',function(){ return 'Login'; });

Route::prefix('/app')->group(function(){
    Route::get('/clientes',function(){ return 'Clientes'; })->name('app.clientes');
    Route::get('/fornecedores','FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos',function(){ return 'Produtos'; })->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');

Route::fallback(function(){
    echo 'A rota não existe. <a href="'.route('site.index').'">Clique aqui para voltar a página inicial.</a>';
});

