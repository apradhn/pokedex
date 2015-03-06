<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model {

	protected $table = 'pokemon';

 	/**
	* Search among Pokémon
	* @return Collection
	*/
	public static function search($query) {
	# If there is a query, search the library with that query
		if($query) {
			# Eager load tags and author
			$pokemon = Pokemon::where('name', 'LIKE', "%$query%")
			->get();
			# Note on what `use` means above:
			# Closures may inherit variables from the parent scope.
			# Any such variables must be passed to the `use` language construct.
		}
		# Otherwise, just fetch all books
		else {
			# Eager load tags and author
			$pokemon = Pokemon::all();
		}
		return $pokemon;
	}

}
