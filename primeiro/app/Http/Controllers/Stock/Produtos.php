<?php
//LARAVEL #011 INTRODUÇÃO AOS CONTROLLERS
/*
    Comando para criar uma pasta com um controller com artisan
        php artisan make:controller NomeDaPasta/NomeDoControlador
*/
namespace App\Http\Controllers\Stock;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Produtos extends Controller
{
    public function index(){
        echo 'produtos';
    }
}
