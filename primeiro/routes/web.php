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

Route::get('/user/{nome}', function($nome){
    //echo 'Nome: ' . $nome;
    echo "Nome: $nome";
});

Route::get('/user/{nome}/{sobrenome}', function($nome, $sobrenome){
    echo "Nome: $nome $sobrenome";
});

Route::get('user/{nome}/{sobrenome}', 'Main@user');

//Route::get('/nome/{nome}/{idade}/{sobrenome?}', function($nome, $idade, $sobrenome = ''){
//    echo "Nome: $nome $sobrenome | Idade: $idade";
//});

Route::get('/nome/{nome}/{idade}/{sobrenome?}', 'Main@nome');

//LARAVEL #010 ROUTES COM NOME
Route::get('/home', 'Main@home')->name('home');
Route::get('/servicos', 'Main@servicos')->name('servicos');
Route::get('/contato', 'Main@contato')->name('contato');

//LARAVEL #011 INTRODUÇÃO AOS CONTROLLERS
Route::get('clientes', 'Clientes@index');
Route::get('email', 'Clientes@mostraEmail');

Route::get('produtos', 'Stock\Produtos@index');

//LARAVEL #012 CONTROLLERS COM UMA FUNÇÃO E PARÂMETROS
Route::get('dados/{a}', 'Stats');

Route::get('cliente/{index}', 'Clientes@cliente');