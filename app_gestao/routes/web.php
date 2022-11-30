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

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobrenos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', function () {
    echo 'login web';
});
Route::fallback(function () {
    return 'Error ao tenta acessa essa página <a href="' . route('site.index') . '">clique aqui</a> para voltar para a pagina principal';
});
Route::prefix('/app')->group(function () {
    Route::get('/fornecedores','FornecedorController@index')->name('app.fornecedores');
    Route::get('/clientes', function () {
        echo 'clientes web';
    })->name('app.clientes');
    Route::get('/produtos', function () {
        echo 'produtos web';
    })->name('app.produtos');
});
Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('site.teste');



//teste banco de dados
//$this->get('/test-conn', function () {
    //$user = \App\User::create([
       // 'name' => 'vinicius',
        //'email' => 'vinicius@gmail.com',
        //'password' => bcrypt('123456'),
    //]);
//});