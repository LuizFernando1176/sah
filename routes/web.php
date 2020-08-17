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
    return view('welcome');
});
//sistema rotas
Route::get('/sistema', 'SistemaController@indexSistema')->name('index.sistema');

//sistema rotas Filmes
Route::get('/sistema/filmes', 'CoreController@indexFilme')->name('index.filmes');
Route::post('/adicionarFilmes', 'CoreController@adicionarFilmes')->name('cadastar.filmes');

//sistema rotas Curso
Route::get('/sistema/cursos', 'CoreController@indexCurso')->name('index.curso');
Route::post('/adicionarCurso', 'CoreController@adicionarCursos')->name('cadastar.curso');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

