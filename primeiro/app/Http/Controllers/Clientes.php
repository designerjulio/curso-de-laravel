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

    //LARAVEL #012 CONTROLLERS COM UMA FUNÇÃO E PARÂMETROS
    private $clientes = [
        [
            'nome' => 'Julio',
            'email' => 'julio@email.com'
        ],
        [
            'nome' => 'Monica',
            'email' => 'monicao@email.com'
        ],
        [
            'nome' => 'Tosoni',
            'email' => 'tosoni@email.com'
        ],
        [
            'nome' => 'Cezar',
            'email' => 'cezar@email.com'
        ]
    ];

    /*public function cliente($index){
        echo $this->clienteDetail($index);
    }

    private function clienteDetail($index){
        if($index >= 0 && $index < count($this->clientes)){
            return "Nome: {$this->clientes[$index]['nome']} | Email: {$this->clientes[$index]['email']}";
        }else{
            return 'Não existe o cliente escolhido.';
        }
    }*/

    //LARAVEL #013 CONTROLLERS COM PARÂMETROS OPCIONAIS E RESOURCE CONTROLLERS
    /*public function cliente($index = 0){
        echo "Nome: {$this->clientes[$index]['nome']}";
    }*/
    public function cliente($dado, $index = 0){
        echo "Nome: {$this->clientes[$index][$dado]}";
    }

    //LARAVEL #014 INTRODUÇÃO ÀS VIEWS
    public function pagina(){
        //return view('clientes.cliente');

        echo 'inicio';
        echo view('clientes.cliente');
        echo 'Fim';
    }
}
