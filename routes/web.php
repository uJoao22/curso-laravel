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