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
Route::get('/','PrincipalController@principal')->name('site.index');
Route::get('/sobreNos','SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato','ContatoController@contato')->name('site.contato');
Route::post('/contato','ContatoController@salvar')->name('site.contato');

/*
Route::get('/contato/{nome}/{categoria?}', function(string $nome, string $categoria = null){
    echo "Variaveis, Nome:".$nome." e Categoria: ".$categoria;
})->where('nome','[A-Za-z]+');
*/

Route::get('/login/{erro?}','LoginController@index')->name('site.login');
Route::post('/login','LoginController@autenticar')->name('site.login');

Route::middleware('log.acesso','autenticacao')->prefix('/app')->group(function(){
    Route::get('/home','HomeController@index')->name('app.home');
    Route::get('/sair','LoginController@sair')->name('app.sair');
    Route::get('/cliente','ClienteController@index')->name('app.cliente');
     
    
    
    Route::get('/fornecedor','FornecedorController@index')->name('app.fornecedor.index');
    Route::post('/fornecedor/listar','FornecedorController@listar')->name('app.fornecedor.listar');
    Route::get('/fornecedor/adicionar','FornecedorController@adicionar')->name('app.fornecedor.adicionar');
    Route::post('/fornecedor/adicionar','FornecedorController@adicionar')->name('app.fornecedor.adicionar');
    
    Route::get('/produto','ProdutoController@index')->name('app.produto');
});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');

Route::fallback(function(){
    echo 'A rota não existe. <a href="'.route('site.index').'">Clique aqui para voltar a página inicial.</a>';
});

