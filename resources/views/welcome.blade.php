@extends('layouts.main') <!-- Estendendo o arquivo main do layout - HERDANDO -->

@section('title', 'HDC Events') <!-- Definindo que o title vai ser HDC events, usando o yield da página main.blade.php -->

@section('content') <!-- Definindo o conteudo da página -->

<h1>Algum titulo</h1>

<img src="/img/banner.jpg" alt="Banner">

@if(10>5)
<!-- Iniciando uma diretiva no blade -->
<p>A condição é true</p>
@endif
<!-- Fechando a diretiva -->


<!-- Recebendo dados das rotas -->
<p>{{ $nome }}</p>

@if($nome == "Pedro")
<!-- IF -->
<p>O nome é Pedro</p>
@elseif($nome == "Matheus")
<!-- ELSE IF -->
<p>O nome é {{$nome}} e ele tem {{$idade}} anos, e trabalha como {{$profissao}}.</p>
@else
<!-- ELSE -->
<p>O nome não é Pedro</p>
@endif
<!-- Fechando a estrutura de repetição -->


@for($i=0; $i < count($arr); $i++) <!-- FOR -->
    <p>{{$arr[$i]}} - {{$i}}</p>
    @if($i==2)
    <!-- IF -->
    <p>O i é 2</p>
    @endif
    <!-- END IF -->
    @endfor
    <!-- END FOR -->

    <!-- Executando códigos PHP através das diretivas do blade -->
    @php
    $name = "João";
    echo $name;
    @endphp
    <!-- END PHP -->

    <!-- Comentário do HTML -->
    {{-- Comentário do Blade --}}

    @foreach($nomes as $nome)
    <!-- FOR EACH -->
    <p>{{$loop->index}}</p> <!-- Imprimindo os indices, através de variaveis especiais do for each -->
    <p>{{$nome}}</p>
    @endforeach
    <!-- END FOR EACH -->

@endsection