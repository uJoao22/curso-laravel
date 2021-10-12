@extends('layouts.main') <!-- Estendendo o arquivo main do layout - HERDANDO -->

@section('title', 'HDC Events') <!-- Definindo que o title vai ser HDC events, usando o yield da página main.blade.php -->

@section('content') <!-- Definindo o conteudo da página -->

    @foreach($events as $event) <!-- Percorrendo todos elementos events e renomeando como event -->
        <p>{{$event->title}} --  {{$event->description}}</p>  <!-- Imprimindo o event no indice title e no indice description -->
    @endforeach

@endsection