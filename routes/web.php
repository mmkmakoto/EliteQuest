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

//ROTAS LIVRES
Route::get('/categorias', ['as' => 'categorias.visualizar', 'uses' => 'CategoriasController@index']);
Route::post('/categorias/create', ['as' => 'categorias.criar', 'uses' => 'CategoriasController@create']);
Route::get('/categorias/delete/{categoria}', ['as' => 'categorias.deletar', 'uses' => 'CategoriasController@delete']);
Route::get('/categorias/edit/{categoria}', ['as' => 'categorias.editar', 'uses' => 'CategoriasController@edit']);
Route::post('/categorias/save', ['as' => 'categorias.salvar', 'uses' => 'CategoriasController@save']);

Route::get('/questoes', ['as' => 'questoes.visualizar', 'uses' => 'QuestoesController@index']);
Route::post('/questoes/create', ['as' => 'questoes.criar', 'uses' => 'QuestoesController@create']);
Route::get('/questoes/delete/{questao}', ['as' => 'questoes.deletar', 'uses' => 'QuestoesController@delete']);
Route::get('/questoes/edit/{questao}', ['as' => 'questoes.editar', 'uses' => 'QuestoesController@edit']);
Route::post('/questoes/save', ['as' => 'questoes.salvar', 'uses' => 'QuestoesController@save']);

Route::get('/exemplo_angular', ['as' => 'exemplo_angular.visualizar', 'uses' => 'ExemploAngularController@index']);



//ROTAS PARA USERS NÃO AUTENTICADOS APENAS
Route::middleware('guest')->get('/', ['as' => 'view.index', 'uses' => 'ViewController@viewIndex']);

//ROTAS PARA USERS AUTENTICADOS APENAS
Route::middleware('auth')->get('/partida', ['as' => 'partida.visualizar', 'uses' => 'ViewController@viewPartida']);
Route::middleware('auth')->get('/dashboard',['as' => 'view.dashboard', 'uses' => 'ViewController@viewDashboard']);
Route::middleware('auth')->get('/home',['as' => 'view.home', 'uses' => 'ViewController@viewHome']);

Auth::routes();