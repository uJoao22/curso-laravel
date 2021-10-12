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

     public function store(Request $request){ //Criando a rota store com o parametro request, recebendo os dados do formulario
        $event = new Event;

        //event no indice mencionado recebe o dado do request no indice mencionado
        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        $event->save(); //Salvando os dados no banco

        return redirect('/'); //Redirecionando o usuário para a rota /
    }
}
