<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Pokemon;
use Request;
use Input;
use Response;
use View;

class PokemonController extends Controller {

	public function postSearch() 
	{
		if(Request::ajax()) {

			$query = Input::get('query');
	        # We're demoing two possible return formats: JSON or HTML
	        $format = Input::get('format');
	        # Do the actual query
	        $pokemon = Pokemon::search($query);

	        # If the request is JSON, just send the books back as JSON
	        /*
	        if($format == 'json') {
	        	return Response::json($pokemon);
	        }
	        */
	        # Otherwise, loop through the results building the HTML view we'll return
	        if($format == 'html') {
	        	$results = '';
	        	foreach($pokemon as $pm) {
					# For each pokemon, we'll add a new stub to the results
					$total = $pm['hp'] + $pm['attack'] + $pm['defense'] + $pm['sp_atk']
					+ $pm['sp_def'] + $pm['speed'];

					$type_a = $pm['type_a'];
					$type_b = $pm['type_b'];
					$id = $pm['id'];

					$national_number = Pokemon::get_national_number($id);

					$type_defenses = Pokemon::type_defenses($type_a, $type_b);

					$results .= View::make('pokemon_search_result')
					->with('pm', $pm)
					->with('total', $total)
					->with('national_number', $national_number)
					->with('type_defenses', $type_defenses)
					->render();      		
	        	}

	        	# Return the HTML/View to Javascript...
	        	return $results;
	        }
		}
	}
}