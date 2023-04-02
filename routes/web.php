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

//base_url -- localhost/pizza
Route::get('/', function () {
    return view('welcome');
});

//base_url -- localhost/pizzaria/cardapio
Route::get('/cardapio', function () {
    return view('cardapio');
});

//base_url -- localhost/pizzaria/clientes
Route::get('/clientes', function () {
    return view('clientes');
});

//base_url -- localhost/pizzaria/contato
Route::get('/contato', function () {
    return view('contato');
});

//base_url -- localhost/pizzaria/detalhes-produto
Route::get('/detalhes-produto', function () {
    return view('detalhes-produto');
});

//base_url -- localhost/pizzaria/sobre
Route::get('/sobre', function () {
    return view('sobre');
});
//base_url -- localhost/pizzaria/landing
Route::get('/landing', function () {
    return view('landing');
});
//base_url -- localhost/pizzaria/local
Route::get('/local', function () {
    return view('local');
});
//base_url -- localhost/pizzaria/produto
Route::get('/produto', function () {
    return view('produto');
});

//base_url -- localhost/pizzaria/login
Route::get('/login', function () {
    return view('login');
});

//base_url -- localhost/pizzaria/home
Route::get('/home', function () {
    return view('home');
});

//base_url -- localhost/pizzaria/rodape
//Route::get('/--', function () {
//    return view('-');
//});
