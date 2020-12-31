<?php
//LARAVEL #012 CONTROLLERS COM UMA FUNÇÃO E PARÂMETROS
/*
    Comando para criar um controller invoke com artisan
        php artisan make:controller NomeDoControlador --invokable
*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Stats extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $teste)
    {
        echo 'Estado: '.$teste;
    }
}
