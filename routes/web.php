<?php

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

/**
 * rota home
 */
Route::name('home')->get('/', function(){
    return redirect('login');
});

/**
 * Corrige erro: se estiver logado e acessar rota '/login' estava redirecionando para '/home'
 */
Route::get('/home', function(){
    return redirect('/admin/dados-pessoal');
});

/**
 * rotas auth: login, logout, register, remember password
 */
//Auth::routes();
Route::name('login')->get('/login', 'Auth\LoginController@showLoginForm');
Route::post('/login', 'Auth\LoginController@login');

/**
 * logout
 */
Route::name('logout')->post('/logout', 'Auth\LoginController@logout');

/**
 * Rota administração usuário
 */
Route::group([
    'namespace' => 'Admin\\',
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => 'auth'
], function(){
    /**
     * dados pessoal
     */
    Route::resource('dados-pessoal', 'DadosPessoalController', ['only' => ['index', 'update']]);

    /**
     * escolas
     */
    Route::resource('escolas', 'EscolasController', ['except' => ['show']]);

    /**
     * historico
     */
    Route::resource('historico', 'HistoricoController');

    /**
     * buscar cep
     */
    Route::name('buscar-cep')->get('/cep', 'DadosPessoalController@buscarCep');
});
