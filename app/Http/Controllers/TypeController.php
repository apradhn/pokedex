<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use View;
use App\Pokemon;

class TypeController extends Controller {

	/**
	* Show information about the given type
	* 
	* @param string $type_id
	* @return Response
	*/
	public function show($type_id)
	{
		$type = $type_id;

		$pokemon = Pokemon::where('type_a', '=', $type)
		->orWhere('type_b', '=', $type)
		->get();
		return View::make('type-profile')
			->with('type', $type)
			->with('pokemon', $pokemon);
	}
}