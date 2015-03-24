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

		$names = [];

		foreach ($pokemon as $pm) {
			array_push($names, $pm['name']);		
		}
		$id = $pm['id'];

		$national_number = Pokemon::get_national_number($id);			

		$pm_class = Pokemon::get_name_class($names);
		
		return View::make('type-profile')
			->with('type', $type)
			->with('pokemon', $pokemon)
			->with('national_number', $national_number);
	}
}