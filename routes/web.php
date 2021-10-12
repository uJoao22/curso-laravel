<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

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
});

Route::get('/contact', function () {
    return view('contact');
});

//Acessando uma rota através do parametro
//Recebendo o parametro id pela rota e enviando o parametro pela funçao para a view
Route::get('/produtos_teste/{id?}', function ($id = null) { //Obrigatorio o uso de um parametro, bom definir um parametro default
    return view('product', ['id' => $id]); //Enviando o parametro através da rota 
});

Route::get('/produtos', function () {  //Quando o usuario acessar a rota /produtos

    $busca = request('search'); //A variavel busca ira receber por request os dados do parametro search

    return view('products', ['busca' => $busca]); //irá aparecer a view produtcs, e será enviado a variaveç busca para a view
});


