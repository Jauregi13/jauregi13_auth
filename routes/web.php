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

Route::get('/admin','AdminController@index')->name('admin');

Route::get('/listadoUsuarios','AdminController@listarUsuarios')->name('listarUsuarios');

Route::get('/eliminar/{id}','AdminController@eliminarUsuario')->name('eliminarUsuario');

Route::resource('perfil','PerfilController');

Route::resource('mensajes','MensajeController')->only('create','store','destroy','edit','update');

Route::get('/mensajesEnviados','MensajeController@mensajesEnviados')->name('mensajesEnviados');

Route::get('/mensajesRecibidos','MensajeController@mensajesRecibidos')->name('mensajesRecibidos');

Route::get('/leerMensaje/{id}','MensajeController@leerMensaje')->name('leerMensaje');
