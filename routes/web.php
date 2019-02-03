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

Route::get('/', ['as'=>'home','uses'=>'AppController@index']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('perfil','PerfilController');

Route::resource('mensajes','MensajeController')->only('index','create','store');

Route::get('/mensajesEnviados','MensajeController@mensajesEnviados')->name('mensajesEnviados');

Route::get('/mensajesRecibidos','MensajeController@mensajesRecibidos')->name('mensajesRecibidos');

Route::get('/leerMensaje/{id}','MensajeController@leerMensaje')->name('leerMensaje');

Route::get('/eliminar/{id}','MensajeController@eliminarLeido')->name('eliminarLeido');
