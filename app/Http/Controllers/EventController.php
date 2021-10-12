<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() { //Criando a rota index - A rota principal da aplicação
        $nome = "Matheus";
        $idade = 29;
        $profissao = "Programador";
    
        $arr = [10,20,30,40,50];
        $nomes = ["Matheus", "Maria", "João", "Saulo"];
    
        return view('welcome', //Enviando dados através de rotas
        [
            'nome' => $nome, 
            'idade' => $idade, 
            'profissao' => $profissao,
            'arr' => $arr,
            'nomes' => $nomes,
        ]); 
    }

    public function create(){
        return view("events.create");
    }
}
