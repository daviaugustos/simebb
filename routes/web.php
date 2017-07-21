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

/*
|--------------------------------------------------------------
| Login
|   - GET -> viewLogin (laravel auth)
|   - POST -> login (laravel auth)
|   - GET -> viewEsqueciSenha (laravel auth)
|   - POST -> enviarLembreteSenha (laravel auth)
|--------------------------------------------------------------
|--------------------------------------------------------------
| Administrador (Coordenadoria da Comunicação)
|   - GET -> viewAdicionarUsuario ('/home/autenticacao/adicionar', AdminController@viewAdicionarUsuario)
|   - POST -> adicionarUsuario ('/home/autenticacao/salvar', AdminController@salvarNovoUsuario)
|   - GET -> viewDesativarUsuario ('/home/autenticacao/desativar', AdminController@viewDesativarUsuario)
|   - POST -> desativarUsuario ('/home/autenticacao/salvarDesativacao', AdminController@desativarUsuario)
|   
|--------------------------------------------------------------
|
*/


//Route::get('/dashboard', 'AdminController@viewDashboard');

Route::get('/', function(){ return "Teste";});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

