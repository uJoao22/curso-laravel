@extends('layouts.main') 

@section('title', 'Criar Evento') 

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie o seu evento</h1>
        <form action="/events" method="POST">
        @csrf <!-- Obrigatorio o uso da diretiva csrf para o envio do formulario -->
            <div class="mb-3">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
            </div>
            <div class="mb-3">
                <label for="city">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
            </div>
            <div class="mb-3">
                <label for="private">O evento é privado?</label>
                <select class="form-control" id="private" name="private">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="description">Descrição:</label>
                <textarea class="form-control" id="description" name="description" placeholder="O que vai acontecer no evento?"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Criar evento">
        </form>
    </div>

@endsection