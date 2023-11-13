<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

/*
Route::get('/', function () {
    return view('index');
});
*/

//Login

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login.index');
    Route::get('/novousuario', 'criarusuario')->name('login.criarusuario');
    Route::post('/login', 'store')->name('login.store');
    Route::get('/logout', 'destroy')->name('login.destroy');
    Route::post('/solicitar', 'storeusuario')->name('login.storeusuario');

  });

//Rota TCC

//Inicio do Sistema

Route::get('/inicio', 'App\Http\Controllers\RequisitoController@indexinicio');

//Gestão Usuario

Route::get('/gestaousuario', 'App\Http\Controllers\RequisitoController@indexgestaousuario')->middleware('auth');
Route::get('/requisitos/gestaousuario/autorizar/{user}', 'App\Http\Controllers\RequisitoController@autorizarusuario')->middleware('auth');
Route::get('/requisitos/gestaousuario/cancelar/{user}', 'App\Http\Controllers\RequisitoController@cancelarusuario')->middleware('auth');
Route::get('/requisitos/gestaousuario/tornaradm/{user}', 'App\Http\Controllers\RequisitoController@tornaradm')->middleware('auth');


//Gestão Programa

Route::get('/gestaorequisito', 'App\Http\Controllers\RequisitoController@indexgestaorequisito')->middleware('auth');
Route::get('/gestaorequisito/ativar/{requisitos}', 'App\Http\Controllers\RequisitoController@ativarrequisito')->middleware('auth');
Route::get('/gestaorequisito/inativar/{requisitos}', 'App\Http\Controllers\RequisitoController@inativarusuario')->middleware('auth');



//requisito
Route::get('/requisitos/inicio', 'App\Http\Controllers\RequisitoController@index')->middleware('auth');
Route::post('/requisitos', 'App\Http\Controllers\RequisitoController@store')->middleware('auth');
Route::get('/requisitos/requisitos/inicio', 'App\Http\Controllers\RequisitoController@index')->middleware('auth');
Route::get('/requisitos/{requisitos}/requisitos/inicio', 'App\Http\Controllers\RequisitoController@index')->middleware('auth');
Route::get('/requisitos', 'App\Http\Controllers\RequisitoController@create')->middleware('auth');

//elicitacao
Route::get('/elicitacao', 'App\Http\Controllers\RequisitoController@createelicitacao')->middleware('auth');
Route::post('/elicitacao', 'App\Http\Controllers\RequisitoController@storeelicitacao')->middleware('auth');
Route::get('/elicitacao/inicio', 'App\Http\Controllers\RequisitoController@indexelicitacao')->middleware('auth');
Route::get('/elicitacao/inicio/{elicitacao}', 'App\Http\Controllers\RequisitoController@showelicitacao')->middleware('auth');
Route::get('/elicitacao/inicio/edit/{elicitacao}', 'App\Http\Controllers\RequisitoController@editelicitacao')->middleware('auth');
Route::put('/elicitacao/update/{elicitacao}', 'App\Http\Controllers\RequisitoController@updateelicitacao')->middleware('auth');
Route::get('/elicitacao/inicio/excluir/{elicitacao}', 'App\Http\Controllers\RequisitoController@excluirelicitacao')->middleware('auth');


//historia
Route::get('/requisitos/criarhistoria/{requisitos}', 'App\Http\Controllers\RequisitoController@createhistoria')->middleware('auth');
Route::put('/requisitos/criarhistoria', 'App\Http\Controllers\RequisitoController@storeHistoria')->middleware('auth');

//Gestão História
Route::get('/requisitos/gestaohistoria/{historias}', 'App\Http\Controllers\RequisitoController@indexgestaohistoria')->middleware('auth');
Route::get('/requisitos/gestaohistoria/editarhistoria/{historias}', 'App\Http\Controllers\RequisitoController@edithistoria')->middleware('auth');
Route::put('/requisitos/gestaohistoria/editarhistoria/alterarhistoria/{historias}', 'App\Http\Controllers\RequisitoController@updatehistoria')->middleware('auth');
Route::get('/requisitos/gestaohistoria/homologarhistoria/{historias}', 'App\Http\Controllers\RequisitoController@homologarhistoria')->middleware('auth');
Route::get('/requisitos/gestaohistoria/cancelarhistoria/{historias}', 'App\Http\Controllers\RequisitoController@cancelarhistoria')->middleware('auth');

//Gestão Versão
Route::get('/requisitos/gestaoversao/{historias}', 'App\Http\Controllers\RequisitoController@indexgestaoversao')->middleware('auth');
Route::get('/requisitos/gestaoversao/visualizar/{historias}', 'App\Http\Controllers\RequisitoController@showhistoria')->middleware('auth');
Route::get('/requisitos/gestaoversao/imprimir/{historias}', 'App\Http\Controllers\RequisitoController@geraPdf')->middleware('auth');

//Relatórios
Route::get('/relatorios', 'App\Http\Controllers\RequisitoController@relatorios')->middleware('auth');
Route::post('/relatorios/tipogeracao', 'App\Http\Controllers\RequisitoController@tipogeracao')->middleware('auth');
