<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


Route::get('/line', 'ScriptureController@showLine');
Route::get('/line/{id}', 'ScriptureController@showLine');

Route::get('/page', 'ScriptureController@showPage');
Route::get('/page/{id}', 'ScriptureController@showPage');
