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
|   - GET -> viewAdicionarUsuario ('/home/autenticacao/adicionar', ComunicacaoController@viewAdicionarUsuario)
|   - POST -> adicionarUsuario ('/home/autenticacao/salvar', ComunicacaoController@salvarNovoUsuario)
|   - GET -> viewDesativarUsuario ('/home/autenticacao/desativar', ComunicacaoController@viewDesativarUsuario)
|   - POST -> desativarUsuario ('/home/autenticacao/salvarDesativacao', ComunicacaoController@desativarUsuario)
|   
|--------------------------------------------------------------
|
*/

//Utilizar para ver as rotas utilizadas pelo auth do laravel - php artisan route:list
//Auth::routes();

Route::get ('/',                                        'Auth\LoginController@showLoginForm');
Route::get ('/identificacao',                           'Auth\LoginController@showLoginForm')
    ->name('viewLogin');

Route::post('/identificacao/login',                     'Auth\LoginController@login')
    ->name('login');
Route::post('/home/logout',                             'Auth\LoginController@logout')
    ->name('logout');
Route::middleware('can:acessar-comunicacao')->group(function(){
    Route::get ('/comunicacao/home',                                    'Comunicacao\ComunicacaoController@index')
        ->name('viewHomeComunicacao');
        
    Route::get ('/comunicacao/home/autenticacao/adicionar',             'Auth\RegisterController@showRegistrationForm')
        ->name('viewAdicionarUsuario');

    Route::post('/comunicacao/home/autenticacao/salvar',                'Auth\RegisterController@register')
        ->name('salvarUsuario');

    Route::get ('/comunicacao/home/autenticacao/gerenciar-usuarios',    'Comunicacao\ComunicacaoController@viewGerenciarUsuarios')
        ->name('viewGerenciarUsuarios');

});