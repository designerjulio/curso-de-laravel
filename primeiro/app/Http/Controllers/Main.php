<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    public function index(){
        echo "Estou no index!";
    }
    public function mostrarNome(){
        return view('pagina3', ['nome'=> 'Armando Volks']);
    }
    public function user($nome, $sobrenome){
        //echo "$nome $sobrenome";
        return view('user', [
            'nome' => $nome,
            'sobrenome' => $sobrenome
        ]);
    }
}
