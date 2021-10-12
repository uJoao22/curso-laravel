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

use App\Http\Controllers\EventController; //Importando o EventController


Route::get('/', [EventController::class, 'index']); //Quando for acessada a rota / será chamada a funçao index que está dentro do EventController
Route::get('/events/create', [EventController::class, 'create']); //Quando for acessada a rota /events/create será chamada a funçao create que está dentro do EventController
 
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


