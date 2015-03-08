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

	/**
	* return an array of a pokemon's type defenses
	*
	* @param  		string 		attack type
	* @param 		string 		defense type a
	* @param 		string 		defense type a
	* @return 		arary 		type defenses
	*/	

	public static function type_defenses($type_a, $type_b) {
		$type_defenses = [
			'Normal' => 100,
			'Fire' => 100,
			'Water' => 100,
			'Electric' => 100,
			'Grass' => 100,
			'Ice' => 100,
			'Fighting' => 100,
			'Poison' => 100,
			'Ground' => 100,
			'Flying' => 100,
			'Psychic' => 100,
			'Bug' => 100,
			'Rock' => 100, 
			'Ghost' => 100,
			'Dragon' => 100,
			'Dark' => 100, 
			'Steel' => 100,			
			'Fairy' => 100,	
		];

		if ($type_a == 'Normal') 
		{
			$type_defenses['Fighting'] = $type_defenses['Fighting'] * 2;
			$type_defenses['Ghost'] = $type_defenses['Ghost'] * 0;
		}

		if ($type_a == 'Fire') 
		{
			$type_defenses['Fire'] *= 0.5;
			$type_defenses['Water'] *= 2;
			$type_defenses['Grass'] *= 0.5;
			$type_defenses['Ice'] *= 0.5;
			$type_defenses['Ground'] *= 2;
			$type_defenses['Bug'] *= 0.5;
			$type_defenses['Rock'] *= 2;
			$type_defenses['Steel'] *= 0.5;
			$type_defenses['Fairy'] *= 0.5;
		}

		if ($type_a == 'Water') 
		{
			$type_defenses['Fire'] *= 0.5;
			$type_defenses['Water'] *= 0.5;
			$type_defenses['Electric'] *= 2;
			$type_defenses['Grass'] *= 2;
			$type_defenses['Ice'] *= 0.5;
			$type_defenses['Steel'] *= 0.5;
		}

		if ($type_a == 'Electric') 
		{
			$type_defenses['Electric'] *= 0.5;
			$type_defenses['Ground'] *= 2;
			$type_defenses['Flying'] *= 0.5;
			$type_defenses['Steel'] *= 0.5;
		}

		if ($type_a == 'Grass') 
		{
			$type_defenses['Fire'] *= 2;
			$type_defenses['Ice'] *= 2;
			$type_defenses['Poison'] *= 2;
			$type_defenses['Flying'] *= 2;
			$type_defenses['Bug'] *= 2;
			$type_defenses['Water'] *= 0.5;
			$type_defenses['Ground'] *= 0.5;
			$type_defenses['Rock'] *= 0.5;
		}

		if ($type_a == 'Ice') 
		{
			$type_defenses['Fire'] *= 2;
			$type_defenses['Ice'] *= 0.5;
			$type_defenses['Fighting'] *= 2;
			$type_defenses['Rock'] *= 2;
			$type_defenses['Steel'] *= 2;
		}

		if ($type_a == 'Fighting') 
		{
			$type_defenses['Flying'] *= 2;
			$type_defenses['Psychic'] *= 2;
			$type_defenses['Bug'] *= 0.5;
			$type_defenses['Rock'] *= 0.5;
			$type_defenses['Dark'] *= 0.5;
			$type_defenses['Fairy'] *= 2;
		}

		if ($type_a == 'Poison') 
		{
			$type_defenses['Grass'] *= 0.5;
			$type_defenses['Fighting'] *= 0.5;
			$type_defenses['Poison'] *= 0.5;
			$type_defenses['Ground'] *= 2;
			$type_defenses['Psychic'] *= 2;
			$type_defenses['Bug'] *= 0.5;
			$type_defenses['Fairy'] *= 0.5;
		}

		if ($type_a == 'Ground') 
		{
			$type_defenses['Water'] *= 2;
			$type_defenses['Electric'] *= 0;
			$type_defenses['Grass'] *= 2;
			$type_defenses['Ice'] *= 2;
			$type_defenses['Poison'] *= 0.5;
			$type_defenses['Rock'] *= 0.5;
		}

		if ($type_a == 'Flying') 
		{
			$type_defenses['Electric'] *= 2;
			$type_defenses['Grass'] *= 0.5;
			$type_defenses['Ice'] *= 2;
			$type_defenses['Fighting'] *= 2;
			$type_defenses['Ground'] *= 0;
			$type_defenses['Bug'] *= 0.5;
			$type_defenses['Rock'] *= 2;
		}

		if ($type_a == 'Psychic') 
		{
			$type_defenses['Fighting'] *= 0.5;
			$type_defenses['Psychic'] *= 0.5;
			$type_defenses['Bug'] *= 2;
			$type_defenses['Ghost'] *= 2;
			$type_defenses['Dark'] *= 2;
		} 

		if ($type_a == 'Bug') 
		{
			$type_defenses['Fire'] *= 2;
			$type_defenses['Grass'] *= 0.5;
			$type_defenses['Fighting'] *= 0.5;
			$type_defenses['Ground'] *= 0.5;
			$type_defenses['Flying'] *= 2;
			$type_defenses['Rock'] *= 2;
		}

		if ($type_a == 'Rock') 
		{
			$type_defenses['Normal'] *= 0.5;
			$type_defenses['Fire'] *= 0.5;
			$type_defenses['Water'] *= 2;
			$type_defenses['Grass'] *= 2;
			$type_defenses['Fighting'] *= 2;
			$type_defenses['Poison'] *= 0.5;
			$type_defenses['Ground'] *= 2;
			$type_defenses['Flying'] *= 0.5;
			$type_defenses['Steel'] *= 2;	
		}

		if ($type_a == 'Ghost') 
		{
			$type_defenses['Normal'] *= 0;
			$type_defenses['Fighting'] *= 0;
			$type_defenses['Poison'] *= 0.5;
			$type_defenses['Bug'] *= 0.5;
			$type_defenses['Ghost'] *= 2;
			$type_defenses['Dark'] *= 2;
		}

		if ($type_a == 'Dragon') 
		{
			$type_defenses['Fire'] *= 0.5;
			$type_defenses['Water'] *= 0.5;
			$type_defenses['Electric'] *= 0.5;
			$type_defenses['Grass'] *= 0.5;
			$type_defenses['Ice'] *= 2;
			$type_defenses['Dragon'] *= 2;
			$type_defenses['Fairy'] *= 2;
		}

		if ($type_a == 'Dark') 
		{
			$type_defenses['Fighting'] *= 2;
			$type_defenses['Psychic'] *= 0;
			$type_defenses['Bug'] *= 2;
			$type_defenses['Ghost'] *= 0.5;
			$type_defenses['Dark'] *= 0.5;
			$type_defenses['Fairy'] *= 2;
		}

		if ($type_a == 'Steel') 
		{
			$type_defenses['Normal'] *= 0.5;
			$type_defenses['Fire'] *= 2;
			$type_defenses['Grass'] *= 0.5;
			$type_defenses['Ice'] *= 0.5;
			$type_defenses['Fighting'] *= 2;
			$type_defenses['Poison'] *= 0;
			$type_defenses['Ground'] *= 2;
			$type_defenses['Flying'] *= 0.5;
			$type_defenses['Psychic'] *= 0.5;
			$type_defenses['Bug'] *= 0.5;
			$type_defenses['Rock'] *= 0.5;
			$type_defenses['Dragon'] *= 0.5;
			$type_defenses['Steel'] *= 0.5;
			$type_defenses['Fairy'] *= 0.5;
		}

		if ($type_a == 'Fairy') 
		{
			$type_defenses['Fighting'] *= 0.5;
			$type_defenses['Poison'] *= 2;
			$type_defenses['Bug'] *= 0.5;
			$type_defenses['Dragon'] *= 0;
			$type_defenses['Dark'] *= 0.5;
			$type_defenses['Steel'] *= 2;
		}

		if ($type_b != '') {
			if ($type_b == 'Normal') 
			{
				$type_defenses['Fighting'] *= 2;
				$type_defenses['Ghost'] *= 0;
			}

			if ($type_b == 'Fire') 
			{
				$type_defenses['Fire'] *= 0.5;
				$type_defenses['Water'] *= 2;
				$type_defenses['Grass'] *= 0.5;
				$type_defenses['Ice'] *= 0.5;
				$type_defenses['Ground'] *= 2;
				$type_defenses['Bug'] *= 0.5;
				$type_defenses['Rock'] *= 2;
				$type_defenses['Steel'] *= 0.5;
				$type_defenses['Fairy'] *= 0.5;
			}

			if ($type_b == 'Water') 
			{
				$type_defenses['Fire'] *= 0.5;
				$type_defenses['Water'] *= 0.5;
				$type_defenses['Electric'] *= 2;
				$type_defenses['Grass'] *= 2;
				$type_defenses['Ice'] *= 0.5;
				$type_defenses['Steel'] *= 0.5;
			}

			if ($type_b == 'Electric') 
			{
				$type_defenses['Electric'] *= 0.5;
				$type_defenses['Ground'] *= 2;
				$type_defenses['Flying'] *= 0.5;
				$type_defenses['Steel'] *= 0.5;
			}

			if ($type_b == 'Grass') 
			{
				$type_defenses['Fire'] *= 2;
				$type_defenses['Ice'] *= 2;
				$type_defenses['Poison'] *= 2;
				$type_defenses['Flying'] *= 2;
				$type_defenses['Bug'] *= 2;
				$type_defenses['Water'] *= 0.5;
				$type_defenses['Ground'] *= 0.5;
				$type_defenses['Rock'] *= 0.5;
			}

			if ($type_b == 'Ice') 
			{
				$type_defenses['Fire'] *= 2;
				$type_defenses['Ice'] *= 0.5;
				$type_defenses['Fighting'] *= 2;
				$type_defenses['Rock'] *= 2;
				$type_defenses['Steel'] *= 2;
			}

			if ($type_b == 'Fighting') 
			{
				$type_defenses['Flying'] *= 2;
				$type_defenses['Psychic'] *= 2;
				$type_defenses['Bug'] *= 0.5;
				$type_defenses['Rock'] *= 0.5;
				$type_defenses['Dark'] *= 0.5;
				$type_defenses['Fairy'] *= 2;
			}

			if ($type_b == 'Poison') 
			{
				$type_defenses['Grass'] *= 0.5;
				$type_defenses['Fighting'] *= 0.5;
				$type_defenses['Poison'] *= 0.5;
				$type_defenses['Ground'] *= 2;
				$type_defenses['Psychic'] *= 2;
				$type_defenses['Bug'] *= 0.5;
				$type_defenses['Fairy'] *= 0.5;
			}

			if ($type_b == 'Ground') 
			{
				$type_defenses['Water'] *= 2;
				$type_defenses['Electric'] *= 0;
				$type_defenses['Grass'] *= 2;
				$type_defenses['Ice'] *= 2;
				$type_defenses['Poison'] *= 0.5;
				$type_defenses['Rock'] *= 0.5;
			}

			if ($type_b == 'Flying') 
			{
				$type_defenses['Electric'] *= 2;
				$type_defenses['Grass'] *= 0.5;
				$type_defenses['Ice'] *= 2;
				$type_defenses['Fighting'] *= 2;
				$type_defenses['Ground'] *= 0;
				$type_defenses['Bug'] *= 0.5;
				$type_defenses['Rock'] *= 2;
			}

			if ($type_b == 'Psychic') 
			{
				$type_defenses['Fighting'] *= 0.5;
				$type_defenses['Psychic'] *= 0.5;
				$type_defenses['Bug'] *= 2;
				$type_defenses['Ghost'] *= 2;
				$type_defenses['Dark'] *= 2;
			} 

			if ($type_b == 'Bug') 
			{
				$type_defenses['Fire'] *= 2;
				$type_defenses['Grass'] *= 0.5;
				$type_defenses['Fighting'] *= 0.5;
				$type_defenses['Ground'] *= 0.5;
				$type_defenses['Flying'] *= 2;
				$type_defenses['Rock'] *= 2;
			}

			if ($type_b == 'Rock') 
			{
				$type_defenses['Normal'] *= 0.5;
				$type_defenses['Fire'] *= 0.5;
				$type_defenses['Water'] *= 2;
				$type_defenses['Grass'] *= 2;
				$type_defenses['Fighting'] *= 2;
				$type_defenses['Poison'] *= 0.5;
				$type_defenses['Ground'] *= 2;
				$type_defenses['Flying'] *= 0.5;
				$type_defenses['Steel'] *= 2;	
			}

			if ($type_b == 'Ghost') 
			{
				$type_defenses['Normal'] *= 0;
				$type_defenses['Fighting'] *= 0;
				$type_defenses['Poison'] *= 0.5;
				$type_defenses['Bug'] *= 0.5;
				$type_defenses['Ghost'] *= 2;
				$type_defenses['Dark'] *= 2;
			}

			if ($type_b == 'Dragon') 
			{
				$type_defenses['Fire'] *= 0.5;
				$type_defenses['Water'] *= 0.5;
				$type_defenses['Electric'] *= 0.5;
				$type_defenses['Grass'] *= 0.5;
				$type_defenses['Ice'] *= 2;
				$type_defenses['Dragon'] *= 2;
				$type_defenses['Fairy'] *= 2;
			}

			if ($type_b == 'Dark') 
			{
				$type_defenses['Fighting'] *= 2;
				$type_defenses['Psychic'] *= 0;
				$type_defenses['Bug'] *= 2;
				$type_defenses['Ghost'] *= 0.5;
				$type_defenses['Dark'] *= 0.5;
				$type_defenses['Fairy'] *= 2;
			}

			if ($type_b == 'Steel') 
			{
				$type_defenses['Normal'] *= 0.5;
				$type_defenses['Fire'] *= 2;
				$type_defenses['Grass'] *= 0.5;
				$type_defenses['Ice'] *= 0.5;
				$type_defenses['Fighting'] *= 2;
				$type_defenses['Poison'] *= 0;
				$type_defenses['Ground'] *= 2;
				$type_defenses['Flying'] *= 0.5;
				$type_defenses['Psychic'] *= 0.5;
				$type_defenses['Bug'] *= 0.5;
				$type_defenses['Rock'] *= 0.5;
				$type_defenses['Dragon'] *= 0.5;
				$type_defenses['Steel'] *= 0.5;
				$type_defenses['Fairy'] *= 0.5;
			}

			if ($type_b == 'Fairy') 
			{
				$type_defenses['Fighting'] *= 0.5;
				$type_defenses['Poison'] *= 2;
				$type_defenses['Bug'] *= 0.5;
				$type_defenses['Dragon'] *= 0;
				$type_defenses['Dark'] *= 0.5;
				$type_defenses['Steel'] *= 2;
			}
		}

		return $type_defenses;

	}

}
