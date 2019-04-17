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
Route::get('/cadastrados/tests', 'CadastroPacienteController@tests' );
Route::resource('/cadastrados', 'CadastroPacienteController');
Route::get('/cadastro', 'CadastroPacienteController@cadastro');

Route::get('/cadastrofuncionarios', 'RecepController@create');
Route::get('/inicio', 'RecepController@inicio');
Route::resource('/funcionarioscadastrados', 'RecepController');







