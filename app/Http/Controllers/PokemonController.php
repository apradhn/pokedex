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
					$total = $pm['hp'] + $pm['attack'] + $pm['defense'] + $pm['sp_atk']
					+ $pm['sp_def'] + $pm['speed'];

					/*
					$normal = typeDefense("normal", $pm['type_a'], $pm['type_b']); 
					$fire = typeDefense("fire", $pm['type_a'], $pm['type_b']); 
					$water = typeDefense("water", $pm['type_a'], $pm['type_b']); 
					$electric = typeDefense("electric", $pm['type_a'], $pm['type_b']); 
					$grass = typeDefense("grass", $pm['type_a'], $pm['type_b']); 
					$ice = typeDefense("ice", $pm['type_a'], $pm['type_b']); 
					$fighting = typeDefense("fighting", $pm['type_a'], $pm['type_b']); 
					$poison = typeDefense("poison", $pm['type_a'], $pm['type_b']); 
					$ground = typeDefense("ground", $pm['type_a'], $pm['type_b']); 
					$flying = typeDefense("flying", $pm['type_a'], $pm['type_b']); 
					$psychic = typeDefense("psychic", $pm['type_a'], $pm['type_b']); 
					$bug = typeDefense("bug", $pm['type_a'], $pm['type_b']); 
					$rock = typeDefense("rock", $pm['type_a'], $pm['type_b']); 
					$ghost = typeDefense("ghost", $pm['type_a'], $pm['type_b']); 
					$dragon = typeDefense("dragon", $pm['type_a'], $pm['type_b']); 
					$dark = typeDefense("dark", $pm['type_a'], $pm['type_b']); 
					$steel = typeDefense("steel", $pm['type_a'], $pm['type_b']); 
					$fairy = typeDefense("fairy", $pm['type_a'], $pm['type_b']); 
					*/
					
					$results .= View::make('pokemon_search_result')
					->with('pm', $pm)
					->with('total', $total)
					->render();      		
	        	}

	        	# Return the HTML/View to Javascript...
	        	return $results;
	        }

		}
	}


	/**
	 * return a Pokemon's type defense towards different attack types
	 *
	 * @param  		string 		attack type
	 * @param 		string 		defense type a
	 * @param 		string 		defense type a
	 * @return 		float 		type defense
	 */	

/*
	public function typeDefense(attack, type_a, type_b) {

		if (type_a == "normal") {
			# code...
		}

		if (type_a == "fire") {
			# code...
		}

		if (type_a == "water") {
			# code...
		}

		if (type_a == "electric") {
			# code...
		}		

		if (type_a == "grass") {
			# code...
		}

		if (type_a == "ice") {
			# code...
		}				

		if (type_a == "fighting") {
			# code...
		}

		if (type_a == "poison") {
			# code...
		}	


	}
*/
}