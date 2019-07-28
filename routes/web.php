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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
	Route::put('aportes', ['as' => 'index.aportes', 'uses' => 'Aportes\AportesController@index']);
	Route::put('catalogo', ['as' => 'index.catalogo', 'uses' => 'ProfileController@password']);
	Route::put('preguntas', ['as' => 'index.preguntas', 'uses' => 'ProfileController@password']);
	Route::put('usuarios', ['as' => 'index.usuarios', 'uses' => 'ProfileController@password']);
	Route::put('reportes', ['as' => 'index.reportes', 'uses' => 'ProfileController@password']);

});

