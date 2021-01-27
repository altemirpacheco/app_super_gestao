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
Route::get('/sobre', 'SobreNosController@sobreNos')->name('site.sobre');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', function () {
    return 'Login';
})->name('site.login');

// Agrupando as rotas
Route::prefix('/app')->group(function () {
    Route::get('/clientes', function () {
        return 'Clientes';
    })->name('app.clientes');
    Route::get('/fornecedores', function () {
        return 'Fornecedores';
    })->name('app.fornecedores');
    Route::get('/produtos', function () {
        return 'Produtos';
    })->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');



// ## Rota utilizada quando a rota não existe ##
Route::fallback(function () {
    echo 'Este endereço não existe. <a href="' . route('site.index') . '" > Voltar </a>';
});

// ## Redirecionamento de rotas  ##

// Route::get('/rota1', function () {
//     echo 'Rota 1';
// })->name('site.rota1');

// Route::get('/rota2', function () {
//     return redirect()->route('site.rota1');
// })->name('site.rota2');

// Route::redirect('/rota2', 'rota1');


// ## Rota validada com expressão regular ##

// Route::get(
//     'contato/{name}/{id}',
//     function (string $name, int $id) {
//         echo "$id - $name";
//     }
// )->where(['id' => '[0-9]+', 'name' => '[a-z]+']); // Faz a crítica com expressão numera pra só receber inteiro como parâmmetro
