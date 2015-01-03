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


Route::group(array('prefix' => 'api/v1'), function()
{
	$api = 'api\v1\\';
	Route::resource('users', $api.'UsersController');
	Route::resource('users.questions', $api.'QuestionsController');
});

