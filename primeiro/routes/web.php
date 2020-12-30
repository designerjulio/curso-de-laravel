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

Route::get('/teste', 'Main@index');
Route::get('/user', 'Main@user');

Route::view('/pagina', 'pagina');

Route::view('/pagina2', 'pagina2', ['nome' => 'Julio Cezar']);

Route::view('/pagina3', 'pagina3', ['nome' => 'Julio Cezar']);

Route::get('/pagina4', 'Main@mostrarNome');
