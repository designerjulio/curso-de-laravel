<?php
//LARAVEL #011 INTRODUÇÃO AOS CONTROLLERS
/*
    Comando para criar um controller com artisan
        php artisan make:controller NomeDoControlador
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Clientes extends Controller
{
    //Método index
    public function index(){
        echo 'Clientes';
    }
    //Método que executa o método privado email()
    public function mostraEmail(){
        $this->email();
    }
    //Método privado email
    private function email(){
        echo 'Email do cliente';
    }
}
