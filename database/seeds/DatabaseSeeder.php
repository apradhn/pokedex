<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// Model::unguard();

		// $this->call('UserTableSeeder');

		$this->call('PokemonTableSeeder');
	}

}

class PokemonTableSeeder extends Seeder {
	public function run()
	{
		DB::table('pokemon')->delete();

		DB::table('pokemon')->insert(array(
			array('name'=>'Bulbasaur', 'type_a'=>'Grass', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/bulbasaur.png',
			'hp'=>'45', 'attack'=>'49', 'defense'=>'49', 'sp_atk'=>'65', 'sp_def'=>'65', 'speed'=>'45'),
			array('name'=>'Ivysaur', 'type_a'=>'Grass', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/ivysaur.png',
			'hp'=>'60', 'attack'=>'62', 'defense'=>'63', 'sp_atk'=>'80', 'sp_def'=>'80', 'speed'=>'60'),
			array('name'=>'Venusaur', 'type_a'=>'Grass', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/venusaur.png',
			'hp'=>'80', 'attack'=>'82', 'defense'=>'83', 'sp_atk'=>'100', 'sp_def'=>'100', 'speed'=>'80'),
			array('name'=>'Charmander', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/charmander.png',
			'hp'=>'39', 'attack'=>'52', 'defense'=>'43', 'sp_atk'=>'60', 'sp_def'=>'50', 'speed'=>'65'),
			array('name'=>'Charmeleon', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/charmeleon.png',
			'hp'=>'58', 'attack'=>'64', 'defense'=>'58', 'sp_atk'=>'80', 'sp_def'=>'65', 'speed'=>'80'),
			array('name'=>'Charizard', 'type_a'=>'Fire', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/charizard.png',
			'hp'=>'78', 'attack'=>'84', 'defense'=>'78', 'sp_atk'=>'109', 'sp_def'=>'85', 'speed'=>'100'),
			array('name'=>'Squirtle', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/squirtle.png',
			'hp'=>'44', 'attack'=>'48', 'defense'=>'65', 'sp_atk'=>'50', 'sp_def'=>'64', 'speed'=>'43'),
			array('name'=>'Wartortle', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/wartortle.png',
			'hp'=>'59', 'attack'=>'63', 'defense'=>'80', 'sp_atk'=>'65', 'sp_def'=>'80', 'speed'=>'58'),
			array('name'=>'Blastoise', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/blastoise.png',
			'hp'=>'79', 'attack'=>'83', 'defense'=>'100', 'sp_atk'=>'85', 'sp_def'=>'105', 'speed'=>'78'),

			));
	}
}