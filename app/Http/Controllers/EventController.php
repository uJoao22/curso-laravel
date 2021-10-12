<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event; //Chamando a classe model Event

class EventController extends Controller
{
    public function index() { //Criando a rota index - A rota principal da aplicação

        $events = Event::all(); //Chamando todos os eventos do banco para a variavel events
    
        return view('welcome', ['events' => $events]); //Envinado para a view / todos os eventos do banco
    }

    public function create(){
        return view("events.create");
    }
}
