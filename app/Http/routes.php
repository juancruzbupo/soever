<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

//Route::get('index', 'InicioController@index');

Route::post('send', 'InicioController@sendMail');

Route::post('regmail', 'NoticiaController@registrarMail');

Route::resource('noticia', 'NoticiaController');

Route::get('auth/login', 'Auth\AuthController@getLogin');

Route::post('auth/login', 'Auth\AuthController@postLogin');

Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');

Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('mensaje', function () {
	$mensaje = 'Su mail se envio correctamente.';
	return view('layout.mensaje', compact('mensaje'));

});

Route::post('cambioimg', 'InicioController@cambioImg');

//Route::get('/', 'InicioController@index');

Route::get('/', 'InicioController@index');

Route::get('secretarias', function () {
	return view('secretaria.index');

});