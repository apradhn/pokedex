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

Route::get('/', function()
	{
		return View::make('home');
	});

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('mysql-test', function() {

	# Print environment
	echo 'Environment: '.App::environment().'<br>';

	# Use the DB component to select all the databases
	$results = DB::select('SHOW DATABASES');

	# If the "Pre" package is not installed, you should output using print_r instead
	echo Pre::render($results);
});