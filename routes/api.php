<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/model_access/{model}', ['as' => 'model_access.all', 'uses' => 'ModelAccessController@all']);
Route::get('/categorias/all', ['as' => 'model_access.categorias.all', 'uses' => 'ModelAccessController@categorias']);
Route::get('/questoes/all', ['as' => 'model_access.questoes.all', 'uses' => 'ModelAccessController@questoes']);
Route::post('/categorias/create', ['as' => 'model_access.categorias.create', 'uses' => 'ModelAccessController@categoriasCreate']);
Route::post('/questoes/create', ['as' => 'model_access.questoes.create', 'uses' => 'ModelAccessController@questoesCreate']);

//ROTAS PARA CONTROLE DE SALA
Route::get('/salas/teste' ,['as' => 'salas.teste', 'uses' => 'SalasController@teste']);
Route::get('/salas/all', ['as' => 'salas.all', 'uses' => 'SalasController@all']);
Route::post('/salas/create', ['as' => 'salas.create', 'uses' => 'SalasController@create']);
Route::post('/salas/join', ['as' => 'salas.join', 'uses' => 'SalasController@join']);
Route::post('/salas/exit', ['as' => 'salas.exit', 'uses' => 'SalasController@exit']);
Route::post('/salas/close', ['as' => 'salas.close', 'uses' => 'SalasController@close']);
Route::post('/salas/start', ['as' => 'salas.start', 'uses' => 'SalasController@start']);



//ROTAS PARA USERS AUTENTICADOS APENAS
Route::get('/game_status', ['as' => 'game.status', 'uses' => 'GameController@gameStatus']);
Route::get('/pergunta', ['as' => 'game.pergunta', 'uses' => 'GameController@gamePergunta']);