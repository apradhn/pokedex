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


Route::get('/', function()
	{
		return View::make('pokemon_search');
	}); # Display the search


Route::post('/pokemon/search', 'PokemonController@postSearch'); # Process the search

/**
*Routes for types
*
**/

Route::get('/types/{type_id}', 'TypeController@show');

Route::get('/data-visualizations', 'VisualizationsController@show');

/**
* Team Builder route
**/
Route::get('/team-builder', function() 
{
    return View::make('team_builder');
});

Route::post('/pokemon/team-search', 'PokemonController@postTeamSearch');
Route::get('/pokemon/team-search', 'PokemonController@getTeamSearch');
Route::get('/pokemon/team-selection', 'PokemonController@getTeamSelection');
# Route::post('/pokemon/team-selection', 'PokemonController@postTeamSelection');


# /app/routes.php
Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>environment.php</h1>';
    $path   = base_path().'/environment.php';

    try {
        $contents = 'Contents: '.File::getRequire($path);
        $exists = 'Yes';
    }
    catch (Exception $e) {
        $exists = 'No. Defaulting to `production`';
        $contents = '';
    }

    echo "Checking for: ".$path.'<br>';
    echo 'Exists: '.$exists.'<br>';
    echo $contents;
    echo '<br>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(Config::get('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    print_r(Config::get('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    } 
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});