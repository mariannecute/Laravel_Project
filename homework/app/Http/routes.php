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

Route::get('/', 'MyControllerHihi@index');

Route::get('home', 'MyControllerHihi@index');

Route::get('regForm', 'MyControllerHihi@regForm');
Route::post('processformwithvalidation', 'MyControllerHihi@processFormWithValidation');

Route::get('log', 'MyControllerHihi@log');
Route::post('loggingIn', 'MyControllerHihi@loggingIn');

Route::get('bahay', 'MyControllerHihi@bahay');
Route::get('logout', 'MyControllerHihi@logout');

Route::get('edit', 'MyControllerHihi@edit');
Route::post('editting', 'MyControllerHihi@editting');

Route::get('deleteSessions', function() {
	Session::flush();

});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',


]);
