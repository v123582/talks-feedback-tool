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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', array('uses' => 'HomeController@showLogin'));
Route::post('login', array('uses' => 'HomeController@doLogin'));
Route::get('logout', array('uses' => 'HomeController@doLogout'));

Route::group(['middleware' => ['web', 'auth']], function () {
	// 顯示所有演講
	Route::get('speaker', array('uses' => 'SpeakerController@showAll'));
	// 顯示單一演講
	Route::get('speaker/{id}', array('uses' => 'SpeakerController@showOne'));
	// 對於單一演講投票
	Route::post('speaker/{id}', array('uses' => 'SpeakerController@vote'));
});