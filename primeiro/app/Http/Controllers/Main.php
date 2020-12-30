<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    public function index(){
        echo "Estou no index!";
    }
    public function user(){
        echo "Estou no user!";
    }
    public function mostrarNome(){
        return view('pagina3', ['nome'=> 'Armando Volks']);
    }
}
