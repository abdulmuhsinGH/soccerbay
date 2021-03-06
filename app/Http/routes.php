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

Route::get('/', 'WelcomeController@index');

Route::get('about', 'WelcomeController@aboutUs');

Route::get('photo', 'WelcomeController@photoGallery');

Route::get('contact', 'WelcomeController@contactUs');

Route::get('home', 'HomeController@index');

Route::get('player', 'WelcomeController@playerInfo');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
