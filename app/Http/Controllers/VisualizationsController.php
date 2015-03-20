<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use View;

class VisualizationsController extends Controller {

	/**
	* List all Visualization links
	* 
	* @return View
	**/
	public function show() {
		return View::make('visualizations');
	}
}