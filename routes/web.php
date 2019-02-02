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

Route::get('/', [
	'uses' => 'IndexController@index',
	'as' => 'index'
]);


Route::get('/character/create',[
	'uses' => 'CharacterController@create',
	'as' => 'create.character'
]);

Route::post('/character/create',[
	'uses' => 'CharacterController@store',
	'as' => 'create.character.add'
]);

Route::get('/movie/create',[
	'uses' => 'MovieController@create',
	'as' => 'create.movie'
]);

Route::post('/movie/create',[
	'uses' => 'MovieController@store',
	'as' => 'create.movie.add'
]);

Route::get('/character/list',[
	'uses' => 'CharacterController@list',
	'as' => 'list.character'
]);