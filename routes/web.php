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

Route::get('/welcome', function () {
    return view('welcome_basic');
})->middleware('auth.basic');

Route::get('/', ['as'=>'home','uses'=>'AppController@index']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/perfil', ['as' => 'perfil', 'uses' => 'PerfilController@get']);

Route::post('/editar', ['as' => 'editar', 'uses' => 'PerfilController@editar']);

Route::get('/password', ['as' => 'password', 'uses' => 'CambiarPasswordController@get']);

Route::post('cambiarPass', ['as' => 'cambiarPass', 'uses' => 'CambiarPasswordController@update']);

Route::get('/mensajes', ['as' => 'mensajes', 'uses' => 'MensajesController@get']);

Route::get('/anadirMensaje', ['as' => 'anadirMensaje', 'uses' => 'AnadirMensajeController@get']);
