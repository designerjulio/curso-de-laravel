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
    public function nome($nome, $idade, $sobrenome = ''){
        return view('nome', [
            'nome'=> $nome,
            'sobrenome'=> $sobrenome,
            'idade'=> $idade
        ]);
    }

    //LARAVEL #010 ROUTES COM NOME
    /*
        Comando para ver a lista de rotas com artisan
            php artisan route:list
    */
    /*public function home(){
        echo '<h3>HOME</h3>';
        echo '<hr>';
        echo '<a href="'.route('home').'">Home</a><br>';
        echo '<a href="'.route('servicos').'">Serviços</a><br>';
        echo '<a href="'.route('contato').'">Contato</a><br>';
    }
    public function servicos(){
        echo '<h3>SERVIÇOS</h3>';
        echo '<hr>';
        echo '<a href="'.route('home').'">Home</a><br>';
        echo '<a href="'.route('servicos').'">Serviços</a><br>';
        echo '<a href="'.route('contato').'">Contato</a><br>';
    }
    public function contato(){
        echo '<h3>CONTATO</h3>';
        echo '<hr>';
        echo '<a href="'.route('home').'">Home</a><br>';
        echo '<a href="'.route('servicos').'">Serviços</a><br>';
        echo '<a href="'.route('contato').'">Contato</a><br>';
    }*/

    //LARAVEL #015 PASSAR DADOS DOS CONTROLLERS PARA AS VIEWS
    public function home(){
        //return view('home', ['nome' => 'Julio', 'sobrenome' => 'Cezar']);

        /*$data = [
            'nome' => 'Julio',
            'sobrenome' => 'Cezar',
            'idade' => 44,
            'telefones' => [
                '21991178599',
                '24981778599'
            ]
        ];
        return view('home', $data);*/

        //LARAVEL #017 BLADE COMENTÁRIOS, APRESENTAÇÃO DE DADOS E EXECUÇÃO DE PHP
        $data = [
            'titulo' => 'Página de teste',
            'texto' => 'Este é o texto da página',
            'valor' => 100,
            'nomes' => [
                'Julio', 'Renato', 'Armando', 'Ana', 'Gabi'
            ]
        ];
        return view('home', $data);
    }
    public function teste(){
        echo 'Eu estou aqui';
    }
}
