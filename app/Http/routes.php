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

Route::group(['middleware' => 'auth'], function () {
	
	//TODO: change the home view depending on the user.
	
	Route::get('/', 'RoomController@index');
	Route::post('/', 'AjaxController@search_videos');
	Route::post('add_video', 'AjaxController@add_video_to_playlist');
	Route::post('remove_video', 'AjaxController@remove_video_from_playlist');
	Route::resource('room', 'RoomController');
	Route::post('update_playlist', 'AjaxController@update_playlist');
});



// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');