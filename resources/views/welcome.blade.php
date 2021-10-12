@extends('layouts.main') <!-- Estendendo o arquivo main do layout - HERDANDO -->

@section('title', 'HDC Events') <!-- Definindo que o title vai ser HDC events, usando o yield da página main.blade.php -->

@section('content') <!-- Definindo o conteudo da página -->

    <div id="search-container" class="col-md-12 px-2">
        <h1>Busque um evento</h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar..."/>
        </form>
    </div>

    <div id="events-container" class="col-md 12 px-2">  
        <h2>Próximos Eventos</h2>
        <p class="card-subtitle">Veja os eventos do próximos dias</p>

        <div id="cards-container" class="row">
            @foreach($events as $event)
                <div class="card col-md-3">
                    <img src="/img/event_placeholder.jpg" alt="{{$event->title}}">
                    <div class="card-body">
                        <p class="card-date">10/09/2020</p>
                        <h5 class="card-title">{{$event->title}}</h5>
                        <p class="card-participants">X Participantes</p>
                        <a href="#" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

@endsection