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

//Utilizar para ver as rotas utilizadas pelo auth do laravel
//Auth::routes();

Route::get('/', 'Auth\LoginController@showLoginForm');

Route::get('/identificacao', 'Auth\LoginController@showLoginForm')
    ->name('viewLogin');

Route::post('/identificacao/login', 'Auth\LoginController@login')
    ->name('login');

Route::get('/home', 'HomeController@index')
    ->name('viewHome');

Route::post('/home/logout', 'Auth\LoginController@logout')
    ->name('logout');

Route::get('/home/autenticacao/adicionar', 'Auth\RegisterController@showRegistrationForm')
    ->name('viewAdicionarUsuario');

Route::post('/home/autenticacao/salvar', 'Auth\RegisterController@register')
    ->name('salvarUsuario');

Route::get('/home/autenticacao/gerenciar-usuarios', 'Admin\AdminController@viewGerenciarUsuarios')
    ->name('viewGerenciarUsuarios');