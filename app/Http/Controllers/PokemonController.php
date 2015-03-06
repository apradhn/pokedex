<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Pokemon;
use Request;
use Input;
use Response;
use View;

class PokemonController extends Controller {

/*
	public function getSearch() {
		return view('pokemon_search');
	}
*/

	public function postSearch() {

		if(Request::ajax()) {

			$query = Input::get('query');

	        # We're demoing two possible return formats: JSON or HTML
	        $format = Input::get('format');

	        # Do the actual query
	        $pokemon = Pokemon::search($query);

	        # If the request is JSON, just send the books back as JSON
	        if($format == 'json') {
	        	return Response::json($pokemon);
	        }
	        # Otherwise, loop through the results building the HTML view we'll return
	        elseif($format == 'html') {

	        	$results = '';
	        	foreach($pokemon as $pm) {
					# For each pokemon, we'll add a new stub to the results
					$results .= View::make('pokemon_search_result')->with('pm', $pm)->render();      		
	        	}

	        	# Return the HTML/View to Javascript...
	        	return $results;
	        }

		}
	}
}