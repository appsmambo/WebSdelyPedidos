<?php

// ingresa usuario admin
Route::get('/crea-usuario', 'HomeController@creaUsuario');

// inicio de rutas para el admin
Route::get('/', array('as' => 'login', 'uses' => 'AdminController@getLogin'));
Route::post('/login', array('uses' => 'AdminController@postLogin'));

// rutas agrupadas para admin
// filtro para auth
Route::group(array('before' => 'auth.admin'), function()
{
	Route::get('/admin', array('as' => 'admin.index', 'uses' => 'AdminController@getIndex'));
	Route::get('/admin/logout', array('as' => 'logout', 'uses' => 'AdminController@getLogOut'));
	
	Route::get('/admin/paginas/inicio', array('uses' => 'AdminController@getPaginasInicio'));
});

// filtro auth
Route::filter('auth.admin', function()
{
	if (!Sentry::check()) {
		return Redirect::route('login');
	}
});