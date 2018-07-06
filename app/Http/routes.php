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
/*
Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/
Route::get('/', 'WelcomeController@index');
/*Route::get('/', 'ConsumoPersonasController@index');*/
Route::get('consumopersonas', 'ConsumoPersonasController@index');
Route::get('consumopersonas/agregar', 'ConsumoPersonasController@create');
Route::post('consumopersonas/agregar', 'ConsumoPersonasController@store');
Route::get('consumopersonas/{id}', 'ConsumoPersonasController@show');
Route::get('consumopersonas/{id}/editar', 'ConsumoPersonasController@edit');
Route::post('consumopersonas/{id}/editar', 'ConsumoPersonasController@update');
Route::post('consumopersonas/{id}/eliminar', 'ConsumoPersonasController@destroy');
Route::get('departamentos', 'DepartamentosController@index');
Route::get('municipios', 'MunicipiosController@index');
Route::get('personas', 'PersonaController@index');
