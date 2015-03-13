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

			array('name'=>'Caterpie', 'type_a'=>'Bug', 'type_b'=>'', 'sprite_url'=>'/sprites/caterpie.png',
			'hp'=>'45', 'attack'=>'30', 'defense'=>'35', 'sp_atk'=>'20', 'sp_def'=>'20', 'speed'=>'45'),

			array('name'=>'Metapod', 'type_a'=>'Bug', 'type_b'=>'', 'sprite_url'=>'/sprites/metapod.png',
			'hp'=>'50', 'attack'=>'20', 'defense'=>'55', 'sp_atk'=>'25', 'sp_def'=>'25', 'speed'=>'30'),

			array('name'=>'Butterfree', 'type_a'=>'Bug', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/butterfree.png',
			'hp'=>'60', 'attack'=>'45', 'defense'=>'50', 'sp_atk'=>'90', 'sp_def'=>'80', 'speed'=>'70'),

			array('name'=>'Weedle', 'type_a'=>'Bug', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/weedle.png',
			'hp'=>'40', 'attack'=>'35', 'defense'=>'30', 'sp_atk'=>'20', 'sp_def'=>'20', 'speed'=>'50'),

			array('name'=>'Kakuna', 'type_a'=>'Bug', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/kakuna.png',
			'hp'=>'45', 'attack'=>'25', 'defense'=>'50', 'sp_atk'=>'25', 'sp_def'=>'25', 'speed'=>'35'),

			array('name'=>'Beedrill', 'type_a'=>'Bug', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/beedrill.png',
			'hp'=>'65', 'attack'=>'90', 'defense'=>'40', 'sp_atk'=>'45', 'sp_def'=>'80', 'speed'=>'75'),
			array('name'=>'Pidgey', 'type_a'=>'Normal', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/pidg
				ey.png',
			'hp'=>'40', 'attack'=>'45', 'defense'=>'40', 'sp_atk'=>'35', 'sp_def'=>'35', 'speed'=>'56'),

			array('name'=>'Pidgeotto', 'type_a'=>'Normal', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/pidgeotto.png',
			'hp'=>'63', 'attack'=>'60', 'defense'=>'55', 'sp_atk'=>'50', 'sp_def'=>'50', 'speed'=>'71'),

			array('name'=>'Pidgeot', 'type_a'=>'Normal', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/pidgeot.png',
			'hp'=>'83', 'attack'=>'80', 'defense'=>'75', 'sp_atk'=>'70', 'sp_def'=>'70', 'speed'=>'101'),

			array('name'=>'Rattata', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/rattata.png',
			'hp'=>'30', 'attack'=>'56', 'defense'=>'35', 'sp_atk'=>'25', 'sp_def'=>'35', 'speed'=>'72'),

			array('name'=>'Raticate', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/raticate.png',
			'hp'=>'55', 'attack'=>'81', 'defense'=>'60', 'sp_atk'=>'50', 'sp_def'=>'70', 'speed'=>'97'),

			array('name'=>'Spearow', 'type_a'=>'Normal', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/spearow.png',
			'hp'=>'40', 'attack'=>'60', 'defense'=>'30', 'sp_atk'=>'31', 'sp_def'=>'31', 'speed'=>'70'),

			array('name'=>'Fearow', 'type_a'=>'Normal', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/fearow.png',
			'hp'=>'65', 'attack'=>'90', 'defense'=>'65', 'sp_atk'=>'61', 'sp_def'=>'61', 'speed'=>'100'),

			array('name'=>'Ekans', 'type_a'=>'Poison', 'type_b'=>'', 'sprite_url'=>'/sprites/ekans.png',
			'hp'=>'35', 'attack'=>'60', 'defense'=>'44', 'sp_atk'=>'40', 'sp_def'=>'54', 'speed'=>'55'),

			array('name'=>'Arbok', 'type_a'=>'Poison', 'type_b'=>'', 'sprite_url'=>'/sprites/arbok.png',
			'hp'=>'60', 'attack'=>'85', 'defense'=>'69', 'sp_atk'=>'65', 'sp_def'=>'79', 'speed'=>'80'),

			array('name'=>'Pikachu', 'type_a'=>'Electric', 'type_b'=>'', 'sprite_url'=>'/sprites/pikachu.png',
			'hp'=>'35', 'attack'=>'55', 'defense'=>'40', 'sp_atk'=>'50', 'sp_def'=>'50', 'speed'=>'90'),

			array('name'=>'Raichu', 'type_a'=>'Electric', 'type_b'=>'', 'sprite_url'=>'/sprites/raichu.png',
			'hp'=>'60', 'attack'=>'90', 'defense'=>'55', 'sp_atk'=>'90', 'sp_def'=>'80', 'speed'=>'110'),

			array('name'=>'Sandshrew', 'type_a'=>'Ground', 'type_b'=>'', 'sprite_url'=>'/sprites/sandshrew.png',
			'hp'=>'50', 'attack'=>'75', 'defense'=>'85', 'sp_atk'=>'20', 'sp_def'=>'30', 'speed'=>'40'),

			array('name'=>'Sandslash', 'type_a'=>'Ground', 'type_b'=>'', 'sprite_url'=>'/sprites/sandslash.png',
			'hp'=>'75', 'attack'=>'100', 'defense'=>'110', 'sp_atk'=>'45', 'sp_def'=>'55', 'speed'=>'65'),

			array('name'=>'Nidoran (female)', 'type_a'=>'Poison', 'type_b'=>'', 'sprite_url'=>'/sprites/nidoran-f.png',
			'hp'=>'55', 'attack'=>'45', 'defense'=>'72', 'sp_atk'=>'40', 'sp_def'=>'40', 'speed'=>'41'),

			array('name'=>'Nidorina', 'type_a'=>'Poison', 'type_b'=>'', 'sprite_url'=>'/sprites/nidorina.png',
			'hp'=>'70', 'attack'=>'62', 'defense'=>'67', 'sp_atk'=>'55', 'sp_def'=>'55', 'speed'=>'56'),

			array('name'=>'Nidoqueen', 'type_a'=>'Poison', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/nidoqueen.png',
			'hp'=>'90', 'attack'=>'92', 'defense'=>'87', 'sp_atk'=>'75', 'sp_def'=>'85', 'speed'=>'76'),

			array('name'=>'Nidoran (male)', 'type_a'=>'Poison', 'type_b'=>'', 'sprite_url'=>'/sprites/nidoran-m.png',
			'hp'=>'46', 'attack'=>'57', 'defense'=>'40', 'sp_atk'=>'40', 'sp_def'=>'40', 'speed'=>'50'),

			array('name'=>'Nidorino', 'type_a'=>'Poison', 'type_b'=>'', 'sprite_url'=>'/sprites/nidorino.png',
			'hp'=>'61', 'attack'=>'72', 'defense'=>'57', 'sp_atk'=>'55', 'sp_def'=>'55', 'speed'=>'65'),

			array('name'=>'Nidoking', 'type_a'=>'Poison', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/nidoking.png',
			'hp'=>'81', 'attack'=>'102', 'defense'=>'77', 'sp_atk'=>'85', 'sp_def'=>'75', 'speed'=>'85'),

			array('name'=>'Clefairy', 'type_a'=>'Fairy', 'type_b'=>'', 'sprite_url'=>'/sprites/clefairy.png',
			'hp'=>'70', 'attack'=>'45', 'defense'=>'48', 'sp_atk'=>'60', 'sp_def'=>'65', 'speed'=>'35'),

			array('name'=>'Clefable', 'type_a'=>'Fairy', 'type_b'=>'', 'sprite_url'=>'/sprites/clefable.png',
			'hp'=>'95', 'attack'=>'70', 'defense'=>'73', 'sp_atk'=>'95', 'sp_def'=>'90', 'speed'=>'60'),

			array('name'=>'Vulpix', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/vulpix.png',
			'hp'=>'38', 'attack'=>'41', 'defense'=>'40', 'sp_atk'=>'50', 'sp_def'=>'65', 'speed'=>'65'),

			array('name'=>'Ninetales', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/ninetales.png',
			'hp'=>'73', 'attack'=>'76', 'defense'=>'75', 'sp_atk'=>'81', 'sp_def'=>'100', 'speed'=>'100'),

			array('name'=>'Jigglypuff', 'type_a'=>'Normal', 'type_b'=>'Fairy', 'sprite_url'=>'/sprites/jigglypuff.png',
			'hp'=>'115', 'attack'=>'45', 'defense'=>'20', 'sp_atk'=>'45', 'sp_def'=>'25', 'speed'=>'20'),

			array('name'=>'Wigglytuff', 'type_a'=>'Normal', 'type_b'=>'Fairy', 'sprite_url'=>'/sprites/wigglytuff.png',
			'hp'=>'140', 'attack'=>'70', 'defense'=>'45', 'sp_atk'=>'85', 'sp_def'=>'50', 'speed'=>'45'),

			array('name'=>'Zubat', 'type_a'=>'Poison', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/zubat.png',
			'hp'=>'40', 'attack'=>'45', 'defense'=>'30', 'sp_atk'=>'30', 'sp_def'=>'40', 'speed'=>'55'),

			array('name'=>'Golbat', 'type_a'=>'Poison', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/golbat.png',
			'hp'=>'75', 'attack'=>'80', 'defense'=>'70', 'sp_atk'=>'65', 'sp_def'=>'75', 'speed'=>'90'),

			array('name'=>'Oddish', 'type_a'=>'Grass', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/oddish.png',
			'hp'=>'45', 'attack'=>'50', 'defense'=>'55', 'sp_atk'=>'75', 'sp_def'=>'65', 'speed'=>'35'),

			array('name'=>'Gloom', 'type_a'=>'Grass', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/gloom.png',
			'hp'=>'60', 'attack'=>'65', 'defense'=>'70', 'sp_atk'=>'85', 'sp_def'=>'75', 'speed'=>'40'),

			array('name'=>'Vileplume', 'type_a'=>'Grass', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/vileplume.png',
			'hp'=>'75', 'attack'=>'80', 'defense'=>'85', 'sp_atk'=>'110', 'sp_def'=>'90', 'speed'=>'50'),

			array('name'=>'Paras', 'type_a'=>'Bug', 'type_b'=>'Grass', 'sprite_url'=>'/sprites/paras.png',
			'hp'=>'35', 'attack'=>'70', 'defense'=>'55', 'sp_atk'=>'45', 'sp_def'=>'55', 'speed'=>'25'),

			array('name'=>'Parasect', 'type_a'=>'Bug', 'type_b'=>'Grass', 'sprite_url'=>'/sprites/parasect.png',
			'hp'=>'60', 'attack'=>'95', 'defense'=>'80', 'sp_atk'=>'60', 'sp_def'=>'80', 'speed'=>'30'),

			array('name'=>'Venonat', 'type_a'=>'Bug', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/venonat.png',
			'hp'=>'60', 'attack'=>'55', 'defense'=>'50', 'sp_atk'=>'40', 'sp_def'=>'55', 'speed'=>'45'),

			array('name'=>'Venomoth', 'type_a'=>'Bug', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/venomoth.png',
			'hp'=>'70', 'attack'=>'65', 'defense'=>'60', 'sp_atk'=>'90', 'sp_def'=>'75', 'speed'=>'90'),

			array('name'=>'Diglett', 'type_a'=>'Ground', 'type_b'=>'', 'sprite_url'=>'/sprites/diglett.png',
			'hp'=>'10', 'attack'=>'55', 'defense'=>'25', 'sp_atk'=>'35', 'sp_def'=>'45', 'speed'=>'90'),

			array('name'=>'Dugtrio', 'type_a'=>'Ground', 'type_b'=>'', 'sprite_url'=>'/sprites/dugtrio.png',
			'hp'=>'35', 'attack'=>'80', 'defense'=>'50', 'sp_atk'=>'50', 'sp_def'=>'70', 'speed'=>'120'),

			array('name'=>'Meowth', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/meowth.png',
			'hp'=>'40', 'attack'=>'45', 'defense'=>'35', 'sp_atk'=>'40', 'sp_def'=>'40', 'speed'=>'90'),

			array('name'=>'Persian', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/persian.png',
			'hp'=>'65', 'attack'=>'70', 'defense'=>'60', 'sp_atk'=>'65', 'sp_def'=>'65', 'speed'=>'115'),

			array('name'=>'Psyduck', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/psyduck.png',
			'hp'=>'50', 'attack'=>'52', 'defense'=>'48', 'sp_atk'=>'65', 'sp_def'=>'50', 'speed'=>'55'),

			array('name'=>'Golduck', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/golduck.png',
			'hp'=>'80', 'attack'=>'82', 'defense'=>'78', 'sp_atk'=>'95', 'sp_def'=>'80', 'speed'=>'85'),

			array('name'=>'Mankey', 'type_a'=>'Fighting', 'type_b'=>'', 'sprite_url'=>'/sprites/mankey.png',
			'hp'=>'40', 'attack'=>'80', 'defense'=>'35', 'sp_atk'=>'35', 'sp_def'=>'45', 'speed'=>'70'),

			array('name'=>'Primeape', 'type_a'=>'Fighting', 'type_b'=>'', 'sprite_url'=>'/sprites/primeape.png',
			'hp'=>'65', 'attack'=>'105', 'defense'=>'60', 'sp_atk'=>'60', 'sp_def'=>'70', 'speed'=>'95'),

			array('name'=>'Growlithe', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/growlithe.png',
			'hp'=>'55', 'attack'=>'70', 'defense'=>'45', 'sp_atk'=>'70', 'sp_def'=>'50', 'speed'=>'60'),

			array('name'=>'Arcanine', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/arcanine.png',
			'hp'=>'90', 'attack'=>'110', 'defense'=>'80', 'sp_atk'=>'100', 'sp_def'=>'80', 'speed'=>'95'),

			array('name'=>'Poliwag', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/poliwag.png',
			'hp'=>'40', 'attack'=>'50', 'defense'=>'40', 'sp_atk'=>'40', 'sp_def'=>'40', 'speed'=>'90'),

			array('name'=>'Poliwhirl', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/poliwhirl.png',
			'hp'=>'65', 'attack'=>'65', 'defense'=>'65', 'sp_atk'=>'50', 'sp_def'=>'50', 'speed'=>'90'),

			array('name'=>'Poliwrath', 'type_a'=>'Water', 'type_b'=>'Fighting', 'sprite_url'=>'/sprites/poliwrath.png',
			'hp'=>'90', 'attack'=>'95', 'defense'=>'95', 'sp_atk'=>'70', 'sp_def'=>'90', 'speed'=>'70'),

			array('name'=>'Abra', 'type_a'=>'Psychic', 'type_b'=>'', 'sprite_url'=>'/sprites/abra.png',
			'hp'=>'25', 'attack'=>'20', 'defense'=>'15', 'sp_atk'=>'105', 'sp_def'=>'55', 'speed'=>'90'),

			array('name'=>'Kadabra', 'type_a'=>'Psychic', 'type_b'=>'', 'sprite_url'=>'/sprites/kadabra.png',
			'hp'=>'40', 'attack'=>'35', 'defense'=>'30', 'sp_atk'=>'120', 'sp_def'=>'70', 'speed'=>'105'),
			
			array('name'=>'Alakazam', 'type_a'=>'Psychic', 'type_b'=>'', 'sprite_url'=>'/sprites/alakazam.png',
			'hp'=>'55', 'attack'=>'50', 'defense'=>'45', 'sp_atk'=>'135', 'sp_def'=>'90', 'speed'=>'120'),

			array('name'=>'Machop', 'type_a'=>'Fighting', 'type_b'=>'', 'sprite_url'=>'/sprites/machop.png',
			'hp'=>'70', 'attack'=>'80', 'defense'=>'50', 'sp_atk'=>'35', 'sp_def'=>'35', 'speed'=>'35'),

			array('name'=>'Machoke', 'type_a'=>'Fighting', 'type_b'=>'', 'sprite_url'=>'/sprites/machoke.png',
			'hp'=>'80', 'attack'=>'100', 'defense'=>'70', 'sp_atk'=>'50', 'sp_def'=>'60', 'speed'=>'45'),

			array('name'=>'Machamp', 'type_a'=>'Fighting', 'type_b'=>'', 'sprite_url'=>'/sprites/machamp.png',
			'hp'=>'90', 'attack'=>'130', 'defense'=>'80', 'sp_atk'=>'65', 'sp_def'=>'85', 'speed'=>'55'),

			array('name'=>'Bellsprout', 'type_a'=>'Grass', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/bellsprout.png',
			'hp'=>'50', 'attack'=>'75', 'defense'=>'35', 'sp_atk'=>'70', 'sp_def'=>'30', 'speed'=>'40'),

			array('name'=>'Weepinbell', 'type_a'=>'Grass', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/weepinbell.png',
			'hp'=>'65', 'attack'=>'90', 'defense'=>'50', 'sp_atk'=>'85', 'sp_def'=>'45', 'speed'=>'55'),

			array('name'=>'Victreebel', 'type_a'=>'Grass', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/victreebel.png',
			'hp'=>'80', 'attack'=>'105', 'defense'=>'65', 'sp_atk'=>'100', 'sp_def'=>'70', 'speed'=>'70'),

			array('name'=>'Tentacool', 'type_a'=>'Water', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/tentacool.png',
			'hp'=>'40', 'attack'=>'40', 'defense'=>'35', 'sp_atk'=>'50', 'sp_def'=>'100', 'speed'=>'70'),

			array('name'=>'Tentacruel', 'type_a'=>'Water', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/tentacruel.png',
			'hp'=>'80', 'attack'=>'70', 'defense'=>'65', 'sp_atk'=>'65', 'sp_def'=>'80', 'speed'=>'120'),

			array('name'=>'Geodude', 'type_a'=>'Rock', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/geodude.png',
			'hp'=>'40', 'attack'=>'80', 'defense'=>'100', 'sp_atk'=>'30', 'sp_def'=>'30', 'speed'=>'20'),

			array('name'=>'Graveler', 'type_a'=>'Rock', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/graveler.png',
			'hp'=>'55', 'attack'=>'95', 'defense'=>'115', 'sp_atk'=>'45', 'sp_def'=>'45', 'speed'=>'35'),

			array('name'=>'Golem', 'type_a'=>'Rock', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/golem.png',
			'hp'=>'80', 'attack'=>'120', 'defense'=>'130', 'sp_atk'=>'55', 'sp_def'=>'65', 'speed'=>'45'),

			array('name'=>'Ponyta', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/ponyta.png',
			'hp'=>'50', 'attack'=>'85', 'defense'=>'55', 'sp_atk'=>'65', 'sp_def'=>'65', 'speed'=>'90'),

			array('name'=>'Rapidash', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/rapidash.png',
			'hp'=>'65', 'attack'=>'100', 'defense'=>'70', 'sp_atk'=>'80', 'sp_def'=>'80', 'speed'=>'105'),

			array('name'=>'Slowpoke', 'type_a'=>'Water', 'type_b'=>'Psychic', 'sprite_url'=>'/sprites/slowpoke.png',
			'hp'=>'90', 'attack'=>'65', 'defense'=>'65', 'sp_atk'=>'40', 'sp_def'=>'40', 'speed'=>'15'),

			array('name'=>'Slowbro', 'type_a'=>'Water', 'type_b'=>'Psychic', 'sprite_url'=>'/sprites/slowbro.png',
			'hp'=>'95', 'attack'=>'75', 'defense'=>'110', 'sp_atk'=>'100', 'sp_def'=>'80', 'speed'=>'30'),

			array('name'=>'Magnemite', 'type_a'=>'Electric', 'type_b'=>'Steel', 'sprite_url'=>'/sprites/magnemite.png',
			'hp'=>'25', 'attack'=>'35', 'defense'=>'70', 'sp_atk'=>'95', 'sp_def'=>'55', 'speed'=>'45'),

			array('name'=>'Magneton', 'type_a'=>'Electric', 'type_b'=>'Steel', 'sprite_url'=>'/sprites/magneton.png',
			'hp'=>'50', 'attack'=>'65', 'defense'=>'95', 'sp_atk'=>'102', 'sp_def'=>'70', 'speed'=>'70'),

			array('name'=>"Farfetch'd", 'type_a'=>'Normal', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/farfetchd.png',
			'hp'=>'52', 'attack'=>'65', 'defense'=>'55', 'sp_atk'=>'58', 'sp_def'=>'62', 'speed'=>'60'),

			array('name'=>'Doduo', 'type_a'=>'Normal', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/doduo.png',
			'hp'=>'35', 'attack'=>'85', 'defense'=>'45', 'sp_atk'=>'35', 'sp_def'=>'35', 'speed'=>'75'),

			array('name'=>'Dodrio', 'type_a'=>'Normal', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/dodrio.png',
			'hp'=>'60', 'attack'=>'110', 'defense'=>'70', 'sp_atk'=>'60', 'sp_def'=>'60', 'speed'=>'100'),

			array('name'=>'Seel', 'type_a'=>'Water', 'type_b'=>'Ice', 'sprite_url'=>'/sprites/seel.png',
			'hp'=>'65', 'attack'=>'45', 'defense'=>'55', 'sp_atk'=>'45', 'sp_def'=>'70', 'speed'=>'45'),

			array('name'=>'Dewgong', 'type_a'=>'Water', 'type_b'=>'Ice', 'sprite_url'=>'/sprites/dewgong.png',
			'hp'=>'90', 'attack'=>'70', 'defense'=>'80', 'sp_atk'=>'70', 'sp_def'=>'95', 'speed'=>'70'),

			array('name'=>'Grimer', 'type_a'=>'Poison', 'type_b'=>'', 'sprite_url'=>'/sprites/grimer.png',
			'hp'=>'80', 'attack'=>'80', 'defense'=>'50', 'sp_atk'=>'40', 'sp_def'=>'50', 'speed'=>'25'),

			array('name'=>'Muk', 'type_a'=>'Poison', 'type_b'=>'', 'sprite_url'=>'/sprites/muk.png',
			'hp'=>'105', 'attack'=>'105', 'defense'=>'75', 'sp_atk'=>'65', 'sp_def'=>'100', 'speed'=>'50'),

			array('name'=>'Shellder', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/shellder.png',
			'hp'=>'30', 'attack'=>'65', 'defense'=>'100', 'sp_atk'=>'45', 'sp_def'=>'25', 'speed'=>'40'),

			array('name'=>'Cloyster', 'type_a'=>'Water', 'type_b'=>'Ice', 'sprite_url'=>'/sprites/cloyster.png',
			'hp'=>'50', 'attack'=>'95', 'defense'=>'180', 'sp_atk'=>'85', 'sp_def'=>'45', 'speed'=>'70'),

			array('name'=>'Gastly', 'type_a'=>'Ghost', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/gastly.png',
			'hp'=>'30', 'attack'=>'35', 'defense'=>'30', 'sp_atk'=>'100', 'sp_def'=>'35', 'speed'=>'40'),

			array('name'=>'Haunter', 'type_a'=>'Ghost', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/haunter.png',
			'hp'=>'45', 'attack'=>'50', 'defense'=>'45', 'sp_atk'=>'115', 'sp_def'=>'55', 'speed'=>'95'),

			array('name'=>'Gengar', 'type_a'=>'Ghost', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/gengar.png',
			'hp'=>'60', 'attack'=>'65', 'defense'=>'60', 'sp_atk'=>'130', 'sp_def'=>'75', 'speed'=>'110'),

			array('name'=>'Onix', 'type_a'=>'Rock', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/onix.png',
			'hp'=>'35', 'attack'=>'45', 'defense'=>'160', 'sp_atk'=>'30', 'sp_def'=>'45', 'speed'=>'70'),

			array('name'=>'Drowzee', 'type_a'=>'Psychic', 'type_b'=>'', 'sprite_url'=>'/sprites/drowzee.png',
			'hp'=>'60', 'attack'=>'48', 'defense'=>'45', 'sp_atk'=>'43', 'sp_def'=>'90', 'speed'=>'42'),

			array('name'=>'Hypno', 'type_a'=>'Psychic', 'type_b'=>'', 'sprite_url'=>'/sprites/hypno.png',
			'hp'=>'85', 'attack'=>'73', 'defense'=>'70', 'sp_atk'=>'73', 'sp_def'=>'115', 'speed'=>'67'),

			array('name'=>'Krabby', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/krabby.png',
			'hp'=>'30', 'attack'=>'105', 'defense'=>'90', 'sp_atk'=>'25', 'sp_def'=>'25', 'speed'=>'50'),

			array('name'=>'Kingler', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/kingler.png',
			'hp'=>'55', 'attack'=>'130', 'defense'=>'115', 'sp_atk'=>'50', 'sp_def'=>'50', 'speed'=>'75'),

			array('name'=>'Voltorb', 'type_a'=>'Electric', 'type_b'=>'', 'sprite_url'=>'/sprites/voltorb.png',
			'hp'=>'40', 'attack'=>'30', 'defense'=>'50', 'sp_atk'=>'55', 'sp_def'=>'55', 'speed'=>'100'),

			array('name'=>'Electrode', 'type_a'=>'Electric', 'type_b'=>'', 'sprite_url'=>'/sprites/electrode.png',
			'hp'=>'60', 'attack'=>'50', 'defense'=>'70', 'sp_atk'=>'80', 'sp_def'=>'80', 'speed'=>'140'),

			array('name'=>'Exeggcute', 'type_a'=>'Grass', 'type_b'=>'Psychic', 'sprite_url'=>'/sprites/exeggcute.png',
			'hp'=>'60', 'attack'=>'40', 'defense'=>'80', 'sp_atk'=>'60', 'sp_def'=>'45', 'speed'=>'40'),

			array('name'=>'Exeggutor', 'type_a'=>'Grass', 'type_b'=>'Psychic', 'sprite_url'=>'/sprites/exeggutor.png',
			'hp'=>'95', 'attack'=>'95', 'defense'=>'85', 'sp_atk'=>'125', 'sp_def'=>'65', 'speed'=>'55'),

			array('name'=>'Cubone', 'type_a'=>'Ground', 'type_b'=>'', 'sprite_url'=>'/sprites/cubone.png',
			'hp'=>'50', 'attack'=>'50', 'defense'=>'95', 'sp_atk'=>'40', 'sp_def'=>'50', 'speed'=>'35'),

			array('name'=>'Marowak', 'type_a'=>'Ground', 'type_b'=>'', 'sprite_url'=>'/sprites/marowak.png',
			'hp'=>'60', 'attack'=>'80', 'defense'=>'110', 'sp_atk'=>'50', 'sp_def'=>'80', 'speed'=>'45'),

			array('name'=>'Hitmonlee', 'type_a'=>'Fighting', 'type_b'=>'', 'sprite_url'=>'/sprites/hitmonlee.png',
			'hp'=>'50', 'attack'=>'120', 'defense'=>'53', 'sp_atk'=>'35', 'sp_def'=>'110', 'speed'=>'87'),

			array('name'=>'Hitmonchan', 'type_a'=>'Fighting', 'type_b'=>'', 'sprite_url'=>'/sprites/hitmonchan.png',
			'hp'=>'50', 'attack'=>'105', 'defense'=>'79', 'sp_atk'=>'35', 'sp_def'=>'110', 'speed'=>'76'),

			array('name'=>'Lickitung', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/lickitung.png',
			'hp'=>'90', 'attack'=>'55', 'defense'=>'75', 'sp_atk'=>'60', 'sp_def'=>'75', 'speed'=>'30'),

			array('name'=>'Koffing', 'type_a'=>'Poison', 'type_b'=>'', 'sprite_url'=>'/sprites/koffing.png',
			'hp'=>'40', 'attack'=>'65', 'defense'=>'95', 'sp_atk'=>'60', 'sp_def'=>'45', 'speed'=>'35'),

			array('name'=>'Weezing', 'type_a'=>'Poison', 'type_b'=>'', 'sprite_url'=>'/sprites/weezing.png',
			'hp'=>'65', 'attack'=>'90', 'defense'=>'120', 'sp_atk'=>'85', 'sp_def'=>'70', 'speed'=>'60'),

			array('name'=>'Rhyhorn', 'type_a'=>'Ground', 'type_b'=>'Rock', 'sprite_url'=>'/sprites/rhyhorn.png',
			'hp'=>'80', 'attack'=>'85', 'defense'=>'95', 'sp_atk'=>'30', 'sp_def'=>'30', 'speed'=>'25'),

			array('name'=>'Rhydon', 'type_a'=>'Ground', 'type_b'=>'Rock', 'sprite_url'=>'/sprites/rhydon.png',
			'hp'=>'105', 'attack'=>'130', 'defense'=>'120', 'sp_atk'=>'45', 'sp_def'=>'45', 'speed'=>'40'),

			array('name'=>'Chansey', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/chansey.png',
			'hp'=>'250', 'attack'=>'5', 'defense'=>'5', 'sp_atk'=>'35', 'sp_def'=>'105', 'speed'=>'50'),

			array('name'=>'Tangela', 'type_a'=>'Grass', 'type_b'=>'', 'sprite_url'=>'/sprites/tangela.png',
			'hp'=>'65', 'attack'=>'55', 'defense'=>'115', 'sp_atk'=>'100', 'sp_def'=>'40', 'speed'=>'60'),

			array('name'=>'Kangaskhan', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/kangaskhan.png',
			'hp'=>'105', 'attack'=>'95', 'defense'=>'80', 'sp_atk'=>'40', 'sp_def'=>'80', 'speed'=>'90'),

			array('name'=>'Horsea', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/horsea.png',
			'hp'=>'30', 'attack'=>'40', 'defense'=>'70', 'sp_atk'=>'70', 'sp_def'=>'25', 'speed'=>'60'),

			array('name'=>'Seadra', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/seadra.png',
			'hp'=>'55', 'attack'=>'65', 'defense'=>'95', 'sp_atk'=>'95', 'sp_def'=>'45', 'speed'=>'85'),

			array('name'=>'Goldeen', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/goldeen.png',
			'hp'=>'45', 'attack'=>'67', 'defense'=>'60', 'sp_atk'=>'35', 'sp_def'=>'50', 'speed'=>'63'),

			array('name'=>'Seaking', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/seaking.png',
			'hp'=>'80', 'attack'=>'92', 'defense'=>'65', 'sp_atk'=>'65', 'sp_def'=>'80', 'speed'=>'68'),

			array('name'=>'Staryu', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/staryu.png',
			'hp'=>'30', 'attack'=>'45', 'defense'=>'55', 'sp_atk'=>'70', 'sp_def'=>'55', 'speed'=>'85'),

			array('name'=>'Starmie', 'type_a'=>'Water', 'type_b'=>'Psychic', 'sprite_url'=>'/sprites/starmie.png',
			'hp'=>'60', 'attack'=>'75', 'defense'=>'85', 'sp_atk'=>'100', 'sp_def'=>'85', 'speed'=>'115'),

			array('name'=>'Mr. Mime', 'type_a'=>'Psychic', 'type_b'=>'Fairy', 'sprite_url'=>'/sprites/mr-mime.png',
			'hp'=>'40', 'attack'=>'45', 'defense'=>'65', 'sp_atk'=>'100', 'sp_def'=>'120', 'speed'=>'90'),

			array('name'=>'Scyther', 'type_a'=>'Bug', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/scyther.png',
			'hp'=>'70', 'attack'=>'110', 'defense'=>'80', 'sp_atk'=>'55', 'sp_def'=>'80', 'speed'=>'105'),

			array('name'=>'Jynx', 'type_a'=>'Ice', 'type_b'=>'Psychic', 'sprite_url'=>'/sprites/jynx.png',
			'hp'=>'65', 'attack'=>'50', 'defense'=>'35', 'sp_atk'=>'115', 'sp_def'=>'95', 'speed'=>'95'),

			array('name'=>'Electabuzz', 'type_a'=>'Electric', 'type_b'=>'', 'sprite_url'=>'/sprites/electabuzz.png',
			'hp'=>'65', 'attack'=>'83', 'defense'=>'57', 'sp_atk'=>'95', 'sp_def'=>'85', 'speed'=>'105'),

			array('name'=>'Magmar', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/magmar.png',
			'hp'=>'65', 'attack'=>'95', 'defense'=>'57', 'sp_atk'=>'100', 'sp_def'=>'85', 'speed'=>'93'),

			array('name'=>'Pinsir', 'type_a'=>'Bug', 'type_b'=>'', 'sprite_url'=>'/sprites/pinsir.png',
			'hp'=>'65', 'attack'=>'125', 'defense'=>'100', 'sp_atk'=>'55', 'sp_def'=>'70', 'speed'=>'85'),

			array('name'=>'Tauros', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/tauros.png',
			'hp'=>'75', 'attack'=>'100', 'defense'=>'95', 'sp_atk'=>'40', 'sp_def'=>'70', 'speed'=>'110'),

			array('name'=>'Magikarp', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/magikarp.png',
			'hp'=>'75', 'attack'=>'100', 'defense'=>'95', 'sp_atk'=>'40', 'sp_def'=>'70', 'speed'=>'110'),

			array('name'=>'Gyarados', 'type_a'=>'Water', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/gyarados.png',
			'hp'=>'95', 'attack'=>'125', 'defense'=>'79', 'sp_atk'=>'60', 'sp_def'=>'100', 'speed'=>'81'),

			array('name'=>'Lapras', 'type_a'=>'Water', 'type_b'=>'Ice', 'sprite_url'=>'/sprites/lapras.png',
			'hp'=>'130', 'attack'=>'85', 'defense'=>'80', 'sp_atk'=>'85', 'sp_def'=>'95', 'speed'=>'60'),

			array('name'=>'Ditto', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/ditto.png',
			'hp'=>'48', 'attack'=>'48', 'defense'=>'48', 'sp_atk'=>'48', 'sp_def'=>'48', 'speed'=>'48'),

			array('name'=>'Eevee', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/eevee.png',
			'hp'=>'55', 'attack'=>'55', 'defense'=>'50', 'sp_atk'=>'45', 'sp_def'=>'65', 'speed'=>'55'),

			array('name'=>'Vaporeon', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/vaporeon.png',
			'hp'=>'130', 'attack'=>'65', 'defense'=>'60', 'sp_atk'=>'110', 'sp_def'=>'95', 'speed'=>'65'),

			array('name'=>'Jolteon', 'type_a'=>'Electric', 'type_b'=>'', 'sprite_url'=>'/sprites/jolteon.png',
			'hp'=>'65', 'attack'=>'65', 'defense'=>'60', 'sp_atk'=>'110', 'sp_def'=>'95', 'speed'=>'130'),

			array('name'=>'Flareon', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/flareon.png',
			'hp'=>'65', 'attack'=>'130', 'defense'=>'60', 'sp_atk'=>'60', 'sp_def'=>'95', 'speed'=>'110'),

			array('name'=>'Porygon', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/porygon.png',
			'hp'=>'65', 'attack'=>'60', 'defense'=>'70', 'sp_atk'=>'85', 'sp_def'=>'75', 'speed'=>'40'),

			array('name'=>'Omanyte', 'type_a'=>'Rock', 'type_b'=>'Water', 'sprite_url'=>'/sprites/omanyte.png',
			'hp'=>'35', 'attack'=>'40', 'defense'=>'100', 'sp_atk'=>'90', 'sp_def'=>'55', 'speed'=>'30'),

			array('name'=>'Omastar', 'type_a'=>'Rock', 'type_b'=>'Water', 'sprite_url'=>'/sprites/omastar.png',
			'hp'=>'70', 'attack'=>'60', 'defense'=>'125', 'sp_atk'=>'115', 'sp_def'=>'70', 'speed'=>'55'),

			array('name'=>'Kabuto', 'type_a'=>'Rock', 'type_b'=>'Water', 'sprite_url'=>'/sprites/kabuto.png',
			'hp'=>'30', 'attack'=>'80', 'defense'=>'90', 'sp_atk'=>'55', 'sp_def'=>'45', 'speed'=>'55'),

			array('name'=>'Kabutops', 'type_a'=>'Rock', 'type_b'=>'Water', 'sprite_url'=>'/sprites/kabutops.png',
			'hp'=>'60', 'attack'=>'115', 'defense'=>'105', 'sp_atk'=>'65', 'sp_def'=>'70', 'speed'=>'80'),

			array('name'=>'Aerodactyl', 'type_a'=>'Rock', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/aerodactyl.png',
			'hp'=>'80', 'attack'=>'105', 'defense'=>'65', 'sp_atk'=>'60', 'sp_def'=>'75', 'speed'=>'130'),

			array('name'=>'Snorlax', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/snorlax.png',
			'hp'=>'160', 'attack'=>'110', 'defense'=>'65', 'sp_atk'=>'65', 'sp_def'=>'110', 'speed'=>'30'),

			array('name'=>'Articuno', 'type_a'=>'Ice', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/articuno.png',
			'hp'=>'90', 'attack'=>'85', 'defense'=>'100', 'sp_atk'=>'95', 'sp_def'=>'125', 'speed'=>'85'),

			array('name'=>'Zapdos', 'type_a'=>'Electric', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/zapdos.png',
			'hp'=>'90', 'attack'=>'90', 'defense'=>'85', 'sp_atk'=>'125', 'sp_def'=>'90', 'speed'=>'100'),

			array('name'=>'Moltres', 'type_a'=>'Fire', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/moltres.png',
			'hp'=>'90', 'attack'=>'100', 'defense'=>'90', 'sp_atk'=>'125', 'sp_def'=>'85', 'speed'=>'90'),

			array('name'=>'Dratini', 'type_a'=>'Dragon', 'type_b'=>'', 'sprite_url'=>'/sprites/dratini.png',
			'hp'=>'41', 'attack'=>'64', 'defense'=>'45', 'sp_atk'=>'50', 'sp_def'=>'50', 'speed'=>'50'),

			array('name'=>'Dragonair', 'type_a'=>'Dragon', 'type_b'=>'', 'sprite_url'=>'/sprites/dragonair.png',
			'hp'=>'61', 'attack'=>'84', 'defense'=>'65', 'sp_atk'=>'70', 'sp_def'=>'70', 'speed'=>'70'),

			array('name'=>'Dragonite', 'type_a'=>'Dragon', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/dragonite.png',
			'hp'=>'91', 'attack'=>'134', 'defense'=>'95', 'sp_atk'=>'100', 'sp_def'=>'100', 'speed'=>'80'),

			array('name'=>'Mewtwo', 'type_a'=>'Psychic', 'type_b'=>'', 'sprite_url'=>'/sprites/mewtwo.png',
			'hp'=>'106', 'attack'=>'110', 'defense'=>'90', 'sp_atk'=>'154', 'sp_def'=>'90', 'speed'=>'130'),

			array('name'=>'Mew', 'type_a'=>'Psychic', 'type_b'=>'', 'sprite_url'=>'/sprites/mew.png',
			'hp'=>'100', 'attack'=>'100', 'defense'=>'100', 'sp_atk'=>'100', 'sp_def'=>'100', 'speed'=>'100'),

			array('name'=>'Chikorita', 'type_a'=>'Grass', 'type_b'=>'', 'sprite_url'=>'/sprites/chikorita.png',
			'hp'=>'45', 'attack'=>'49', 'defense'=>'65', 'sp_atk'=>'49', 'sp_def'=>'65', 'speed'=>'45'),

			array('name'=>'Bayleef', 'type_a'=>'Grass', 'type_b'=>'', 'sprite_url'=>'/sprites/bayleef.png',
			'hp'=>'60', 'attack'=>'62', 'defense'=>'80', 'sp_atk'=>'63', 'sp_def'=>'80', 'speed'=>'60'),

			array('name'=>'Meganium', 'type_a'=>'Grass', 'type_b'=>'', 'sprite_url'=>'/sprites/meganium.png',
			'hp'=>'80', 'attack'=>'82', 'defense'=>'100', 'sp_atk'=>'83', 'sp_def'=>'100', 'speed'=>'80'),

			array('name'=>'Cyndaquil', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/cyndaquil.png',
			'hp'=>'39', 'attack'=>'52', 'defense'=>'43', 'sp_atk'=>'60', 'sp_def'=>'50', 'speed'=>'65'),

			array('name'=>'Quilava', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/quilava.png',
			'hp'=>'58', 'attack'=>'64', 'defense'=>'58', 'sp_atk'=>'80', 'sp_def'=>'65', 'speed'=>'80'),

			array('name'=>'Typhlosion', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/typhlosion.png',
			'hp'=>'78', 'attack'=>'84', 'defense'=>'78', 'sp_atk'=>'109', 'sp_def'=>'85', 'speed'=>'100'),

			array('name'=>'Totodile', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/totodile.png',
			'hp'=>'50', 'attack'=>'65', 'defense'=>'64', 'sp_atk'=>'44', 'sp_def'=>'48', 'speed'=>'43'),

			array('name'=>'Croconaw', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/croconaw.png',
			'hp'=>'65', 'attack'=>'80', 'defense'=>'80', 'sp_atk'=>'59', 'sp_def'=>'63', 'speed'=>'58'),

			array('name'=>'Feraligatr', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/feraligatr.png',
			'hp'=>'50', 'attack'=>'65', 'defense'=>'64', 'sp_atk'=>'44', 'sp_def'=>'48', 'speed'=>'43'),

			array('name'=>'Sentret', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/sentret.png',
			'hp'=>'35', 'attack'=>'46', 'defense'=>'34', 'sp_atk'=>'35', 'sp_def'=>'45', 'speed'=>'20'),

			array('name'=>'Furret', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/furret.png',
			'hp'=>'85', 'attack'=>'76', 'defense'=>'64', 'sp_atk'=>'45', 'sp_def'=>'55', 'speed'=>'90'),

			array('name'=>'Hoothoot', 'type_a'=>'Normal', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/hoothoot.png',
			'hp'=>'60', 'attack'=>'30', 'defense'=>'30', 'sp_atk'=>'36', 'sp_def'=>'56', 'speed'=>'50'),

			array('name'=>'Noctowl', 'type_a'=>'Normal', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/noctowl.png',
			'hp'=>'100', 'attack'=>'50', 'defense'=>'50', 'sp_atk'=>'76', 'sp_def'=>'96', 'speed'=>'70'),

			array('name'=>'Ledyba', 'type_a'=>'Bug', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/ledyba.png',
			'hp'=>'40', 'attack'=>'20', 'defense'=>'30', 'sp_atk'=>'40', 'sp_def'=>'80', 'speed'=>'55'),

			array('name'=>'Ledian', 'type_a'=>'Bug', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/ledian.png',
			'hp'=>'55', 'attack'=>'35', 'defense'=>'50', 'sp_atk'=>'55', 'sp_def'=>'110', 'speed'=>'85'),

			array('name'=>'Spinarak', 'type_a'=>'Bug', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/spinarak.png',
			'hp'=>'40', 'attack'=>'60', 'defense'=>'40', 'sp_atk'=>'40', 'sp_def'=>'40', 'speed'=>'30'),

			array('name'=>'Ariados', 'type_a'=>'Bug', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/ariados.png',
			'hp'=>'70', 'attack'=>'90', 'defense'=>'70', 'sp_atk'=>'60', 'sp_def'=>'60', 'speed'=>'40'),

			array('name'=>'Crobat', 'type_a'=>'Poison', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/crobat.png',
			'hp'=>'85', 'attack'=>'90', 'defense'=>'80', 'sp_atk'=>'70', 'sp_def'=>'80', 'speed'=>'130'),

			array('name'=>'Chinchou', 'type_a'=>'Water', 'type_b'=>'Electric', 'sprite_url'=>'/sprites/chinchou.png',
			'hp'=>'75', 'attack'=>'38', 'defense'=>'38', 'sp_atk'=>'56', 'sp_def'=>'56', 'speed'=>'67'),

			array('name'=>'Lanturn', 'type_a'=>'Water', 'type_b'=>'Electric', 'sprite_url'=>'/sprites/lanturn.png',
			'hp'=>'125', 'attack'=>'58', 'defense'=>'58', 'sp_atk'=>'76', 'sp_def'=>'76', 'speed'=>'67'),

			array('name'=>'Pichu', 'type_a'=>'Electric', 'type_b'=>'', 'sprite_url'=>'/sprites/pichu.png',
			'hp'=>'20', 'attack'=>'40', 'defense'=>'15', 'sp_atk'=>'35', 'sp_def'=>'35', 'speed'=>'60'),

			array('name'=>'Cleffa', 'type_a'=>'Fairy', 'type_b'=>'', 'sprite_url'=>'/sprites/cleffa.png',
			'hp'=>'50', 'attack'=>'25', 'defense'=>'28', 'sp_atk'=>'45', 'sp_def'=>'55', 'speed'=>'15'),

			array('name'=>'Igglybuff', 'type_a'=>'Normal', 'type_b'=>'Fairy', 'sprite_url'=>'/sprites/igglybuff.png',
			'hp'=>'90', 'attack'=>'30', 'defense'=>'15', 'sp_atk'=>'40', 'sp_def'=>'20', 'speed'=>'15'),

			array('name'=>'Togepi', 'type_a'=>'Fairy', 'type_b'=>'', 'sprite_url'=>'/sprites/togepi.png',
			'hp'=>'35', 'attack'=>'20', 'defense'=>'65', 'sp_atk'=>'40', 'sp_def'=>'65', 'speed'=>'20'),

			array('name'=>'Togetic', 'type_a'=>'Fairy', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/togetic.png',
			'hp'=>'55', 'attack'=>'40', 'defense'=>'85', 'sp_atk'=>'80', 'sp_def'=>'105', 'speed'=>'40'),

			array('name'=>'Natu', 'type_a'=>'Psychic', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/natu.png',
			'hp'=>'40', 'attack'=>'50', 'defense'=>'45', 'sp_atk'=>'70', 'sp_def'=>'45', 'speed'=>'70'),

			array('name'=>'Xatu', 'type_a'=>'Psychic', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/xatu.png',
			'hp'=>'65', 'attack'=>'75', 'defense'=>'70', 'sp_atk'=>'95', 'sp_def'=>'70', 'speed'=>'95'),

			array('name'=>'Mareep', 'type_a'=>'Electric', 'type_b'=>'', 'sprite_url'=>'/sprites/mareep.png',
			'hp'=>'55', 'attack'=>'40', 'defense'=>'40', 'sp_atk'=>'65', 'sp_def'=>'45', 'speed'=>'35'),

			array('name'=>'Flaaffy', 'type_a'=>'Electric', 'type_b'=>'', 'sprite_url'=>'/sprites/flaaffy.png',
			'hp'=>'70', 'attack'=>'55', 'defense'=>'55', 'sp_atk'=>'80', 'sp_def'=>'60', 'speed'=>'45'),

			array('name'=>'Ampharos', 'type_a'=>'Electric', 'type_b'=>'', 'sprite_url'=>'/sprites/ampharos.png',
			'hp'=>'90', 'attack'=>'75', 'defense'=>'85', 'sp_atk'=>'115', 'sp_def'=>'90', 'speed'=>'55'),

			array('name'=>'Bellossom', 'type_a'=>'Grass', 'type_b'=>'', 'sprite_url'=>'/sprites/bellossom.png',
			'hp'=>'75', 'attack'=>'80', 'defense'=>'95', 'sp_atk'=>'90', 'sp_def'=>'100', 'speed'=>'50'),

			array('name'=>'Marill', 'type_a'=>'Water', 'type_b'=>'Fairy', 'sprite_url'=>'/sprites/marill.png',
			'hp'=>'70', 'attack'=>'20', 'defense'=>'50', 'sp_atk'=>'20', 'sp_def'=>'50', 'speed'=>'40'),

			array('name'=>'Azumarill', 'type_a'=>'Water', 'type_b'=>'Psychic', 'sprite_url'=>'/sprites/azumarill.png',
			'hp'=>'100', 'attack'=>'50', 'defense'=>'80', 'sp_atk'=>'60', 'sp_def'=>'80', 'speed'=>'50'),

			array('name'=>'Sudowoodo', 'type_a'=>'Rock', 'type_b'=>'', 'sprite_url'=>'/sprites/sudowoodo.png',
			'hp'=>'70', 'attack'=>'100', 'defense'=>'115', 'sp_atk'=>'30', 'sp_def'=>'65', 'speed'=>'30'),

			array('name'=>'Politoed', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/politoed.png',
			'hp'=>'90', 'attack'=>'75', 'defense'=>'75', 'sp_atk'=>'90', 'sp_def'=>'100', 'speed'=>'70'),

			array('name'=>'Hoppip', 'type_a'=>'Grass', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/hoppip.png',
			'hp'=>'35', 'attack'=>'35', 'defense'=>'40', 'sp_atk'=>'35', 'sp_def'=>'55', 'speed'=>'50'),

			array('name'=>'Skiploom', 'type_a'=>'Grass', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/skiploom.png',
			'hp'=>'55', 'attack'=>'45', 'defense'=>'50', 'sp_atk'=>'45', 'sp_def'=>'65', 'speed'=>'80'),

			array('name'=>'Jumpluff', 'type_a'=>'Grass', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/jumpluff.png',
			'hp'=>'75', 'attack'=>'55', 'defense'=>'70', 'sp_atk'=>'55', 'sp_def'=>'95', 'speed'=>'110'),

			array('name'=>'Aipom', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/aipom.png',
			'hp'=>'55', 'attack'=>'70', 'defense'=>'55', 'sp_atk'=>'40', 'sp_def'=>'55', 'speed'=>'85'),

			array('name'=>'Sunkern', 'type_a'=>'Grass', 'type_b'=>'', 'sprite_url'=>'/sprites/sunkern.png',
			'hp'=>'30', 'attack'=>'30', 'defense'=>'30', 'sp_atk'=>'30', 'sp_def'=>'30', 'speed'=>'30'),

			array('name'=>'Sunflora', 'type_a'=>'Grass', 'type_b'=>'', 'sprite_url'=>'/sprites/sunflora.png',
			'hp'=>'75', 'attack'=>'75', 'defense'=>'55', 'sp_atk'=>'105', 'sp_def'=>'85', 'speed'=>'30'),

			array('name'=>'Yanma', 'type_a'=>'Bug', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/yanma.png',
			'hp'=>'65', 'attack'=>'65', 'defense'=>'45', 'sp_atk'=>'75', 'sp_def'=>'45', 'speed'=>'95'),

			array('name'=>'Wooper', 'type_a'=>'Water', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/wooper.png',
			'hp'=>'55', 'attack'=>'45', 'defense'=>'45', 'sp_atk'=>'25', 'sp_def'=>'25', 'speed'=>'15'),

			array('name'=>'Quagsire', 'type_a'=>'Water', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/quagsire.png',
			'hp'=>'95', 'attack'=>'85', 'defense'=>'85', 'sp_atk'=>'65', 'sp_def'=>'65', 'speed'=>'35'),

			array('name'=>'Espeon', 'type_a'=>'Psychic', 'type_b'=>'', 'sprite_url'=>'/sprites/espeon.png',
			'hp'=>'65', 'attack'=>'65', 'defense'=>'60', 'sp_atk'=>'130', 'sp_def'=>'95', 'speed'=>'110'),

			array('name'=>'Umbreon', 'type_a'=>'Dark', 'type_b'=>'', 'sprite_url'=>'/sprites/umbreon.png',
			'hp'=>'95', 'attack'=>'65', 'defense'=>'110', 'sp_atk'=>'60', 'sp_def'=>'130', 'speed'=>'65'),

			array('name'=>'Murkrow', 'type_a'=>'Dark', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/murkrow.png',
			'hp'=>'60', 'attack'=>'85', 'defense'=>'42', 'sp_atk'=>'85', 'sp_def'=>'42', 'speed'=>'91'),

			array('name'=>'Slowking', 'type_a'=>'Water', 'type_b'=>'Psychic', 'sprite_url'=>'/sprites/slowking.png',
			'hp'=>'95', 'attack'=>'75', 'defense'=>'80', 'sp_atk'=>'100', 'sp_def'=>'110', 'speed'=>'30'),

			array('name'=>'Misdreavus', 'type_a'=>'Ghost', 'type_b'=>'', 'sprite_url'=>'/sprites/misdreavus.png',
			'hp'=>'60', 'attack'=>'60', 'defense'=>'60', 'sp_atk'=>'85', 'sp_def'=>'85', 'speed'=>'85'),

			array('name'=>'Unown', 'type_a'=>'Psychic', 'type_b'=>'', 'sprite_url'=>'/sprites/unown.png',
			'hp'=>'48', 'attack'=>'72', 'defense'=>'48', 'sp_atk'=>'72', 'sp_def'=>'48', 'speed'=>'48'),

			array('name'=>'Wobbuffet', 'type_a'=>'Psychic', 'type_b'=>'', 'sprite_url'=>'/sprites/wobbuffet.png',
			'hp'=>'190', 'attack'=>'33', 'defense'=>'58', 'sp_atk'=>'33', 'sp_def'=>'58', 'speed'=>'33'),

			array('name'=>'Girafarig', 'type_a'=>'Normal', 'type_b'=>'Psychic', 'sprite_url'=>'/sprites/girafarig.png',
			'hp'=>'70', 'attack'=>'80', 'defense'=>'65', 'sp_atk'=>'90', 'sp_def'=>'65', 'speed'=>'85'),

			array('name'=>'Pineco', 'type_a'=>'Bug', 'type_b'=>'', 'sprite_url'=>'/sprites/pineco.png',
			'hp'=>'50', 'attack'=>'65', 'defense'=>'90', 'sp_atk'=>'35', 'sp_def'=>'35', 'speed'=>'15'),

			array('name'=>'Forretress', 'type_a'=>'Bug', 'type_b'=>'Steel', 'sprite_url'=>'/sprites/forretress.png',
			'hp'=>'75', 'attack'=>'90', 'defense'=>'140', 'sp_atk'=>'60', 'sp_def'=>'60', 'speed'=>'40'),

			array('name'=>'Dunsparce', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/dunsparce.png',
			'hp'=>'100', 'attack'=>'70', 'defense'=>'70', 'sp_atk'=>'65', 'sp_def'=>'65', 'speed'=>'45'),

			array('name'=>'Gligar', 'type_a'=>'Ground', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/gligar.png',
			'hp'=>'65', 'attack'=>'75', 'defense'=>'105', 'sp_atk'=>'35', 'sp_def'=>'65', 'speed'=>'85'),

			array('name'=>'Steelix', 'type_a'=>'Steel', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/steelix.png',
			'hp'=>'75', 'attack'=>'85', 'defense'=>'200', 'sp_atk'=>'55', 'sp_def'=>'65', 'speed'=>'30'),

			array('name'=>'Snubbull', 'type_a'=>'Fairy', 'type_b'=>'', 'sprite_url'=>'/sprites/snubbull.png',
			'hp'=>'60', 'attack'=>'80', 'defense'=>'50', 'sp_atk'=>'40', 'sp_def'=>'40', 'speed'=>'30'),

			array('name'=>'Granbull', 'type_a'=>'Fairy', 'type_b'=>'', 'sprite_url'=>'/sprites/granbull.png',
			'hp'=>'90', 'attack'=>'120', 'defense'=>'75', 'sp_atk'=>'60', 'sp_def'=>'60', 'speed'=>'45'),

			array('name'=>'Qwilfish', 'type_a'=>'Water', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/qwilfish.png',
			'hp'=>'65', 'attack'=>'95', 'defense'=>'75', 'sp_atk'=>'60', 'sp_def'=>'60', 'speed'=>'45'),

			array('name'=>'Scizor', 'type_a'=>'Bug', 'type_b'=>'Steel', 'sprite_url'=>'/sprites/scizor.png',
			'hp'=>'70', 'attack'=>'130', 'defense'=>'100', 'sp_atk'=>'55', 'sp_def'=>'80', 'speed'=>'65'),

			array('name'=>'Shuckle', 'type_a'=>'Bug', 'type_b'=>'Rock', 'sprite_url'=>'/sprites/shuckle.png',
			'hp'=>'20', 'attack'=>'10', 'defense'=>'230', 'sp_atk'=>'10', 'sp_def'=>'230', 'speed'=>'5'),

			array('name'=>'Heracross', 'type_a'=>'Bug', 'type_b'=>'Fighting', 'sprite_url'=>'/sprites/heracross.png',
			'hp'=>'80', 'attack'=>'125', 'defense'=>'75', 'sp_atk'=>'40', 'sp_def'=>'95', 'speed'=>'85'),

			array('name'=>'Sneasel', 'type_a'=>'Dark', 'type_b'=>'Ice', 'sprite_url'=>'/sprites/sneasel.png',
			'hp'=>'55', 'attack'=>'95', 'defense'=>'55', 'sp_atk'=>'35', 'sp_def'=>'75', 'speed'=>'115'),

			array('name'=>'Teddiursa', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/teddiursa.png',
			'hp'=>'60', 'attack'=>'80', 'defense'=>'50', 'sp_atk'=>'50', 'sp_def'=>'50', 'speed'=>'40'),

			array('name'=>'Ursaring', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/ursaring.png',
			'hp'=>'90', 'attack'=>'130', 'defense'=>'75', 'sp_atk'=>'75', 'sp_def'=>'75', 'speed'=>'55'),

			array('name'=>'Slugma', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/slugma.png',
			'hp'=>'40', 'attack'=>'40', 'defense'=>'40', 'sp_atk'=>'70', 'sp_def'=>'40', 'speed'=>'20'),
			
			array('name'=>'Magcargo', 'type_a'=>'Fire', 'type_b'=>'Rock', 'sprite_url'=>'/sprites/magcargo.png',
			'hp'=>'50', 'attack'=>'50', 'defense'=>'120', 'sp_atk'=>'80', 'sp_def'=>'80', 'speed'=>'30'),

			array('name'=>'Swinub', 'type_a'=>'Ice', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/swinub.png',
			'hp'=>'50', 'attack'=>'50', 'defense'=>'40', 'sp_atk'=>'30', 'sp_def'=>'30', 'speed'=>'50'),

			array('name'=>'Piloswine', 'type_a'=>'Ice', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/piloswine.png',
			'hp'=>'100', 'attack'=>'100', 'defense'=>'80', 'sp_atk'=>'60', 'sp_def'=>'60', 'speed'=>'50'),

			array('name'=>'Corsola', 'type_a'=>'Water', 'type_b'=>'Rock', 'sprite_url'=>'/sprites/corsola.png',
			'hp'=>'55', 'attack'=>'85', 'defense'=>'85', 'sp_atk'=>'65', 'sp_def'=>'85', 'speed'=>'35'),

			array('name'=>'Remoraid', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/remoraid.png',
			'hp'=>'35', 'attack'=>'65', 'defense'=>'35', 'sp_atk'=>'65', 'sp_def'=>'35', 'speed'=>'65'),

			array('name'=>'Octillery', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/octillery.png',
			'hp'=>'75', 'attack'=>'105', 'defense'=>'75', 'sp_atk'=>'105', 'sp_def'=>'75', 'speed'=>'45'),

			array('name'=>'Delibird', 'type_a'=>'Ice', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/delibird.png',
			'hp'=>'45', 'attack'=>'55', 'defense'=>'45', 'sp_atk'=>'65', 'sp_def'=>'45', 'speed'=>'75'),

			array('name'=>'Mantine', 'type_a'=>'Water', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/mantine.png',
			'hp'=>'65', 'attack'=>'40', 'defense'=>'70', 'sp_atk'=>'80', 'sp_def'=>'140', 'speed'=>'70'),

			array('name'=>'Skarmory', 'type_a'=>'Steel', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/skarmory.png',
			'hp'=>'65', 'attack'=>'80', 'defense'=>'140', 'sp_atk'=>'40', 'sp_def'=>'70', 'speed'=>'70'),

			array('name'=>'Houndour', 'type_a'=>'Dark', 'type_b'=>'Fire', 'sprite_url'=>'/sprites/houndour.png',
			'hp'=>'45', 'attack'=>'60', 'defense'=>'30', 'sp_atk'=>'80', 'sp_def'=>'50', 'speed'=>'65'),

			array('name'=>'Houndoom', 'type_a'=>'Dark', 'type_b'=>'Fire', 'sprite_url'=>'/sprites/houndoom.png',
			'hp'=>'75', 'attack'=>'90', 'defense'=>'90', 'sp_atk'=>'140', 'sp_def'=>'90', 'speed'=>'115'),

			array('name'=>'Kingdra', 'type_a'=>'Water', 'type_b'=>'Dragon', 'sprite_url'=>'/sprites/kingdra.png',
			'hp'=>'75', 'attack'=>'95', 'defense'=>'95', 'sp_atk'=>'95', 'sp_def'=>'95', 'speed'=>'85'),

			array('name'=>'Phanpy', 'type_a'=>'Ground', 'type_b'=>'', 'sprite_url'=>'/sprites/phanpy.png',
			'hp'=>'90', 'attack'=>'60', 'defense'=>'60', 'sp_atk'=>'40', 'sp_def'=>'40', 'speed'=>'40'),

			array('name'=>'Donphan', 'type_a'=>'Ground', 'type_b'=>'', 'sprite_url'=>'/sprites/donphan.png',
			'hp'=>'90', 'attack'=>'120', 'defense'=>'120', 'sp_atk'=>'60', 'sp_def'=>'60', 'speed'=>'50'),

			array('name'=>'Porygon2', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/porygon2.png',
			'hp'=>'85', 'attack'=>'80', 'defense'=>'90', 'sp_atk'=>'105', 'sp_def'=>'95', 'speed'=>'60'),

			array('name'=>'Stantler', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/stantler.png',
			'hp'=>'73', 'attack'=>'95', 'defense'=>'62', 'sp_atk'=>'85', 'sp_def'=>'65', 'speed'=>'85'),

			array('name'=>'Smeargle', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/smeargle.png',
			'hp'=>'40', 'attack'=>'40', 'defense'=>'40', 'sp_atk'=>'70', 'sp_def'=>'40', 'speed'=>'20'),

			array('name'=>'Tyrogue', 'type_a'=>'Fighting', 'type_b'=>'', 'sprite_url'=>'/sprites/tyrogue.png',
			'hp'=>'35', 'attack'=>'35', 'defense'=>'35', 'sp_atk'=>'35', 'sp_def'=>'35', 'speed'=>'35'),

			array('name'=>'Hitmontop', 'type_a'=>'Fighting', 'type_b'=>'', 'sprite_url'=>'/sprites/hitmontop.png',
			'hp'=>'50', 'attack'=>'95', 'defense'=>'95', 'sp_atk'=>'35', 'sp_def'=>'110', 'speed'=>'70'),

			array('name'=>'Smoochum', 'type_a'=>'Ice', 'type_b'=>'Psychic', 'sprite_url'=>'/sprites/smoochum.png',
			'hp'=>'45', 'attack'=>'30', 'defense'=>'15', 'sp_atk'=>'85', 'sp_def'=>'65', 'speed'=>'65'),

			array('name'=>'Elekid', 'type_a'=>'Electric', 'type_b'=>'', 'sprite_url'=>'/sprites/elekid.png',
			'hp'=>'45', 'attack'=>'63', 'defense'=>'37', 'sp_atk'=>'65', 'sp_def'=>'55', 'speed'=>'95'),

			array('name'=>'Magby', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/magby.png',
			'hp'=>'45', 'attack'=>'75', 'defense'=>'37', 'sp_atk'=>'70', 'sp_def'=>'55', 'speed'=>'83'),

			array('name'=>'Miltank', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/miltank.png',
			'hp'=>'95', 'attack'=>'80', 'defense'=>'105', 'sp_atk'=>'40', 'sp_def'=>'70', 'speed'=>'100'),

			array('name'=>'Blissey', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/blissey.png',
			'hp'=>'255', 'attack'=>'10', 'defense'=>'10', 'sp_atk'=>'75', 'sp_def'=>'135', 'speed'=>'55'),

			array('name'=>'Raikou', 'type_a'=>'Electric', 'type_b'=>'', 'sprite_url'=>'/sprites/raikou.png',
			'hp'=>'90', 'attack'=>'85', 'defense'=>'75', 'sp_atk'=>'115', 'sp_def'=>'100', 'speed'=>'115'),

			array('name'=>'Entei', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/entei.png',
			'hp'=>'115', 'attack'=>'115', 'defense'=>'85', 'sp_atk'=>'90', 'sp_def'=>'75', 'speed'=>'100'),

			array('name'=>'Suicune', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/suicune.png',
			'hp'=>'100', 'attack'=>'75', 'defense'=>'115', 'sp_atk'=>'90', 'sp_def'=>'115', 'speed'=>'85'),

			array('name'=>'Larvitar', 'type_a'=>'Rock', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/larvitar.png',
			'hp'=>'50', 'attack'=>'64', 'defense'=>'50', 'sp_atk'=>'45', 'sp_def'=>'50', 'speed'=>'41'),

			array('name'=>'Pupitar', 'type_a'=>'Rock', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/pupitar.png',
			'hp'=>'70', 'attack'=>'84', 'defense'=>'70', 'sp_atk'=>'65', 'sp_def'=>'70', 'speed'=>'51'),

			array('name'=>'Tyranitar', 'type_a'=>'Rock', 'type_b'=>'Dark', 'sprite_url'=>'/sprites/tyranitar.png',
			'hp'=>'100', 'attack'=>'164', 'defense'=>'150', 'sp_atk'=>'95', 'sp_def'=>'120', 'speed'=>'71'),

			array('name'=>'Lugia', 'type_a'=>'Psychic', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/lugia.png',
			'hp'=>'106', 'attack'=>'90', 'defense'=>'130', 'sp_atk'=>'90', 'sp_def'=>'154', 'speed'=>'110'),

			array('name'=>'Ho-oh', 'type_a'=>'Fire', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/ho-oh.png',
			'hp'=>'106', 'attack'=>'130', 'defense'=>'90', 'sp_atk'=>'110', 'sp_def'=>'154', 'speed'=>'90'),

			array('name'=>'Celebi', 'type_a'=>'Psychic', 'type_b'=>'Grass', 'sprite_url'=>'/sprites/celebi.png',
			'hp'=>'100', 'attack'=>'100', 'defense'=>'100', 'sp_atk'=>'100', 'sp_def'=>'100', 'speed'=>'100'),

			array('name'=>'Treecko', 'type_a'=>'Grass', 'type_b'=>'', 'sprite_url'=>'/sprites/treecko.png',
			'hp'=>'40', 'attack'=>'45', 'defense'=>'35', 'sp_atk'=>'65', 'sp_def'=>'55', 'speed'=>'70'),

			array('name'=>'Grovyle', 'type_a'=>'Grass', 'type_b'=>'', 'sprite_url'=>'/sprites/grovyle.png',
			'hp'=>'50', 'attack'=>'65', 'defense'=>'45', 'sp_atk'=>'85', 'sp_def'=>'65', 'speed'=>'95'),

			array('name'=>'Sceptile', 'type_a'=>'Grass', 'type_b'=>'', 'sprite_url'=>'/sprites/sceptile.png',
			'hp'=>'70', 'attack'=>'85', 'defense'=>'65', 'sp_atk'=>'105', 'sp_def'=>'85', 'speed'=>'120'),

			array('name'=>'Torchic', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/torchic.png',
			'hp'=>'45', 'attack'=>'60', 'defense'=>'40', 'sp_atk'=>'70', 'sp_def'=>'50', 'speed'=>'45'),

			array('name'=>'Combusken', 'type_a'=>'Fire', 'type_b'=>'Fighting', 'sprite_url'=>'/sprites/combusken.png',
			'hp'=>'60', 'attack'=>'85', 'defense'=>'60', 'sp_atk'=>'85', 'sp_def'=>'60', 'speed'=>'55'),

			array('name'=>'Blaziken', 'type_a'=>'Fire', 'type_b'=>'Fighting', 'sprite_url'=>'/sprites/blaziken.png',
			'hp'=>'80', 'attack'=>'120', 'defense'=>'70', 'sp_atk'=>'110', 'sp_def'=>'70', 'speed'=>'80'),

			array('name'=>'Mudkip', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/mudkip.png',
			'hp'=>'50', 'attack'=>'70', 'defense'=>'50', 'sp_atk'=>'50', 'sp_def'=>'50', 'speed'=>'40'),

			array('name'=>'Marshtomp', 'type_a'=>'Water', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/marshtomp.png',
			'hp'=>'70', 'attack'=>'85', 'defense'=>'70', 'sp_atk'=>'60', 'sp_def'=>'70', 'speed'=>'50'),

			array('name'=>'Swampert', 'type_a'=>'Water', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/swampert.png',
			'hp'=>'100', 'attack'=>'110', 'defense'=>'90', 'sp_atk'=>'85', 'sp_def'=>'90', 'speed'=>'60'),

			array('name'=>'Poochyena', 'type_a'=>'Dark', 'type_b'=>'', 'sprite_url'=>'/sprites/poochyena.png',
			'hp'=>'35', 'attack'=>'55', 'defense'=>'35', 'sp_atk'=>'30', 'sp_def'=>'30', 'speed'=>'35'),

			array('name'=>'Mightyena', 'type_a'=>'Dark', 'type_b'=>'', 'sprite_url'=>'/sprites/mightyena.png',
			'hp'=>'70', 'attack'=>'90', 'defense'=>'70', 'sp_atk'=>'60', 'sp_def'=>'60', 'speed'=>'70'),

			array('name'=>'Zigzagoon', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/zigzagoon.png',
			'hp'=>'70', 'attack'=>'90', 'defense'=>'70', 'sp_atk'=>'60', 'sp_def'=>'60', 'speed'=>'70'),

			array('name'=>'Linoone', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/linoone.png',
			'hp'=>'78', 'attack'=>'70', 'defense'=>'61', 'sp_atk'=>'50', 'sp_def'=>'61', 'speed'=>'100'),

			array('name'=>'Wurmple', 'type_a'=>'Bug', 'type_b'=>'', 'sprite_url'=>'/sprites/wurmple.png',
			'hp'=>'45', 'attack'=>'45', 'defense'=>'35', 'sp_atk'=>'20', 'sp_def'=>'30', 'speed'=>'20'),

			array('name'=>'Silcoon', 'type_a'=>'Bug', 'type_b'=>'', 'sprite_url'=>'/sprites/silcoon.png',
			'hp'=>'50', 'attack'=>'35', 'defense'=>'55', 'sp_atk'=>'25', 'sp_def'=>'25', 'speed'=>'15'),

			array('name'=>'Beautifly', 'type_a'=>'Bug', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/beautifly.png',
			'hp'=>'60', 'attack'=>'70', 'defense'=>'50', 'sp_atk'=>'100', 'sp_def'=>'50', 'speed'=>'65'),

			array('name'=>'Cascoon', 'type_a'=>'Bug', 'type_b'=>'', 'sprite_url'=>'/sprites/cascoon.png',
			'hp'=>'50', 'attack'=>'35', 'defense'=>'55', 'sp_atk'=>'25', 'sp_def'=>'25', 'speed'=>'15'),

			array('name'=>'Dustox', 'type_a'=>'Bug', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/dustox.png',
			'hp'=>'60', 'attack'=>'50', 'defense'=>'70', 'sp_atk'=>'50', 'sp_def'=>'90', 'speed'=>'65'),

			array('name'=>'Lotad', 'type_a'=>'Water', 'type_b'=>'Grass', 'sprite_url'=>'/sprites/lotad.png',
			'hp'=>'40', 'attack'=>'30', 'defense'=>'30', 'sp_atk'=>'40', 'sp_def'=>'50', 'speed'=>'30'),

			array('name'=>'Lombre', 'type_a'=>'Water', 'type_b'=>'Grass', 'sprite_url'=>'/sprites/lombre.png',
			'hp'=>'60', 'attack'=>'50', 'defense'=>'50', 'sp_atk'=>'60', 'sp_def'=>'70', 'speed'=>'50'),

			array('name'=>'Ludicolo', 'type_a'=>'Water', 'type_b'=>'Grass', 'sprite_url'=>'/sprites/ludicolo.png',
			'hp'=>'80', 'attack'=>'70', 'defense'=>'70', 'sp_atk'=>'90', 'sp_def'=>'100', 'speed'=>'70'),

			array('name'=>'Seedot', 'type_a'=>'Grass', 'type_b'=>'', 'sprite_url'=>'/sprites/seedot.png',
			'hp'=>'40', 'attack'=>'40', 'defense'=>'50', 'sp_atk'=>'30', 'sp_def'=>'30', 'speed'=>'30'),

			array('name'=>'Nuzleaf', 'type_a'=>'Grass', 'type_b'=>'Dark', 'sprite_url'=>'/sprites/nuzleaf.png',
			'hp'=>'70', 'attack'=>'70', 'defense'=>'40', 'sp_atk'=>'50', 'sp_def'=>'30', 'speed'=>'30'),

			array('name'=>'Shiftry', 'type_a'=>'Grass', 'type_b'=>'Dark', 'sprite_url'=>'/sprites/shiftry.png',
			'hp'=>'90', 'attack'=>'100', 'defense'=>'60', 'sp_atk'=>'90', 'sp_def'=>'60', 'speed'=>'80'),

			array('name'=>'Taillow', 'type_a'=>'Normal', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/taillow.png',
			'hp'=>'40', 'attack'=>'55', 'defense'=>'30', 'sp_atk'=>'30', 'sp_def'=>'30', 'speed'=>'85'),

			array('name'=>'Swellow', 'type_a'=>'Normal', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/swellow.png',
			'hp'=>'60', 'attack'=>'85', 'defense'=>'60', 'sp_atk'=>'90', 'sp_def'=>'60', 'speed'=>'80'),

			array('name'=>'Wingull', 'type_a'=>'Water', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/wingull.png',
			'hp'=>'40', 'attack'=>'30', 'defense'=>'30', 'sp_atk'=>'55', 'sp_def'=>'30', 'speed'=>'85'),

			array('name'=>'Pelipper', 'type_a'=>'Water', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/pelipper.png',
			'hp'=>'60', 'attack'=>'50', 'defense'=>'100', 'sp_atk'=>'85', 'sp_def'=>'70', 'speed'=>'65'),

			array('name'=>'Ralts', 'type_a'=>'Psychic', 'type_b'=>'Fairy', 'sprite_url'=>'/sprites/ralts.png',
			'hp'=>'28', 'attack'=>'25', 'defense'=>'25', 'sp_atk'=>'45', 'sp_def'=>'35', 'speed'=>'40'),

			array('name'=>'Kirlia', 'type_a'=>'Psychic', 'type_b'=>'Fairy', 'sprite_url'=>'/sprites/kirlia.png',
			'hp'=>'38', 'attack'=>'35', 'defense'=>'35', 'sp_atk'=>'65', 'sp_def'=>'55', 'speed'=>'50'),

			array('name'=>'Gardevoir', 'type_a'=>'Psychic', 'type_b'=>'Fairy', 'sprite_url'=>'/sprites/gardevoir.png',
			'hp'=>'68', 'attack'=>'65', 'defense'=>'65', 'sp_atk'=>'125', 'sp_def'=>'115', 'speed'=>'80'),

			array('name'=>'Surskit', 'type_a'=>'Bug', 'type_b'=>'Water', 'sprite_url'=>'/sprites/surskit.png',
			'hp'=>'40', 'attack'=>'30', 'defense'=>'32', 'sp_atk'=>'50', 'sp_def'=>'52', 'speed'=>'65'),

			array('name'=>'Masquerain', 'type_a'=>'Bug', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/masquerain.png',
			'hp'=>'70', 'attack'=>'60', 'defense'=>'62', 'sp_atk'=>'80', 'sp_def'=>'82', 'speed'=>'60'),

			array('name'=>'Shroomish', 'type_a'=>'Grass', 'type_b'=>'', 'sprite_url'=>'/sprites/shroomish.png',
			'hp'=>'60', 'attack'=>'40', 'defense'=>'60', 'sp_atk'=>'40', 'sp_def'=>'60', 'speed'=>'35'),

			array('name'=>'Breloom', 'type_a'=>'Grass', 'type_b'=>'Fighting', 'sprite_url'=>'/sprites/breloom.png',
			'hp'=>'60', 'attack'=>'130', 'defense'=>'80', 'sp_atk'=>'60', 'sp_def'=>'60', 'speed'=>'70'),

			array('name'=>'Slakoth', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/slakoth.png',
			'hp'=>'60', 'attack'=>'60', 'defense'=>'60', 'sp_atk'=>'35', 'sp_def'=>'35', 'speed'=>'30'),

			array('name'=>'Vigoroth', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/vigoroth.png',
			'hp'=>'80', 'attack'=>'80', 'defense'=>'80', 'sp_atk'=>'55', 'sp_def'=>'55', 'speed'=>'90'),

			array('name'=>'Slaking', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/slaking.png',
			'hp'=>'150', 'attack'=>'160', 'defense'=>'100', 'sp_atk'=>'95', 'sp_def'=>'65', 'speed'=>'100'),

			array('name'=>'Nincada', 'type_a'=>'Bug', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/nincada.png',
			'hp'=>'31', 'attack'=>'45', 'defense'=>'90', 'sp_atk'=>'30', 'sp_def'=>'30', 'speed'=>'40'),

			array('name'=>'Ninjask', 'type_a'=>'Bug', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/ninjask.png',
			'hp'=>'61', 'attack'=>'90', 'defense'=>'45', 'sp_atk'=>'50', 'sp_def'=>'50', 'speed'=>'160'),

			array('name'=>'Shedinja', 'type_a'=>'Bug', 'type_b'=>'Ghost', 'sprite_url'=>'/sprites/shedinja.png',
			'hp'=>'1', 'attack'=>'90', 'defense'=>'45', 'sp_atk'=>'50', 'sp_def'=>'50', 'speed'=>'160'),

			array('name'=>'Whismur', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/whismur.png',
			'hp'=>'64', 'attack'=>'51', 'defense'=>'23', 'sp_atk'=>'51', 'sp_def'=>'23', 'speed'=>'28'),

			array('name'=>'Loudred', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/loudred.png',
			'hp'=>'84', 'attack'=>'7`', 'defense'=>'43', 'sp_atk'=>'71', 'sp_def'=>'43', 'speed'=>'48'),

			array('name'=>'Exploud', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/exploud.png',
			'hp'=>'104', 'attack'=>'91', 'defense'=>'63', 'sp_atk'=>'91', 'sp_def'=>'73', 'speed'=>'68'),

			array('name'=>'Makuhita', 'type_a'=>'Fighting', 'type_b'=>'', 'sprite_url'=>'/sprites/makuhita.png',
			'hp'=>'72', 'attack'=>'60', 'defense'=>'30', 'sp_atk'=>'20', 'sp_def'=>'30', 'speed'=>'25'),

			array('name'=>'Hariyama', 'type_a'=>'Fighting', 'type_b'=>'', 'sprite_url'=>'/sprites/hariyama.png',
			'hp'=>'144', 'attack'=>'120', 'defense'=>'60', 'sp_atk'=>'40', 'sp_def'=>'60', 'speed'=>'50'),

			array('name'=>'Azurill', 'type_a'=>'Normal', 'type_b'=>'Fairy', 'sprite_url'=>'/sprites/azurill.png',
			'hp'=>'50', 'attack'=>'20', 'defense'=>'40', 'sp_atk'=>'20', 'sp_def'=>'40', 'speed'=>'20'),

			array('name'=>'Nosepass', 'type_a'=>'Rock', 'type_b'=>'', 'sprite_url'=>'/sprites/nosepass.png',
			'hp'=>'30', 'attack'=>'45', 'defense'=>'135', 'sp_atk'=>'45', 'sp_def'=>'90', 'speed'=>'30'),

			array('name'=>'Skitty', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/skitty.png',
			'hp'=>'50', 'attack'=>'45', 'defense'=>'45', 'sp_atk'=>'35', 'sp_def'=>'35', 'speed'=>'50'),

			array('name'=>'Delcatty', 'type_a'=>'Normal', 'type_b'=>'','sprite_url'=>'/sprites/delcatty.png',
			'hp'=>'70', 'attack'=>'65', 'defense'=>'65', 'sp_atk'=>'55', 'sp_def'=>'55', 'speed'=>'70'),

			array('name'=>'Sableye', 'type_a'=>'Dark', 'type_b'=>'Ghost', 'sprite_url'=>'/sprites/sableye.png',
			'hp'=>'50', 'attack'=>'75', 'defense'=>'75', 'sp_atk'=>'65', 'sp_def'=>'65', 'speed'=>'50'),

			array('name'=>'Mawile', 'type_a'=>'Steel', 'type_b'=>'Fairy', 'sprite_url'=>'/sprites/mawile.png',
			'hp'=>'50', 'attack'=>'85', 'defense'=>'85', 'sp_atk'=>'55', 'sp_def'=>'55', 'speed'=>'50'),

			array('name'=>'Aron', 'type_a'=>'Steel', 'type_b'=>'Rock', 'sprite_url'=>'/sprites/aron.png',
			'hp'=>'50', 'attack'=>'70', 'defense'=>'100', 'sp_atk'=>'40', 'sp_def'=>'40', 'speed'=>'30'),

			array('name'=>'Lairon', 'type_a'=>'Steel', 'type_b'=>'Rock', 'sprite_url'=>'/sprites/lairon.png',
			'hp'=>'60', 'attack'=>'90', 'defense'=>'140', 'sp_atk'=>'50', 'sp_def'=>'50', 'speed'=>'40'),

			array('name'=>'Aggron', 'type_a'=>'Steel', 'type_b'=>'Rock', 'sprite_url'=>'/sprites/aggron.png',
			'hp'=>'70', 'attack'=>'110', 'defense'=>'180', 'sp_atk'=>'60', 'sp_def'=>'60', 'speed'=>'50'),

			array('name'=>'Meditite', 'type_a'=>'Fighting', 'type_b'=>'Psychic', 'sprite_url'=>'/sprites/meditite.png',
			'hp'=>'30', 'attack'=>'40', 'defense'=>'55', 'sp_atk'=>'40', 'sp_def'=>'55', 'speed'=>'60'),

			array('name'=>'Medicham', 'type_a'=>'Fighting', 'type_b'=>'Psychic', 'sprite_url'=>'/sprites/medicham.png',
			'hp'=>'60', 'attack'=>'60', 'defense'=>'75', 'sp_atk'=>'60', 'sp_def'=>'75', 'speed'=>'80'),

			array('name'=>'Electrike', 'type_a'=>'Electric', 'type_b'=>'', 'sprite_url'=>'/sprites/electrike.png',
			'hp'=>'40', 'attack'=>'45', 'defense'=>'40', 'sp_atk'=>'65', 'sp_def'=>'40', 'speed'=>'65'),

			array('name'=>'Manectric', 'type_a'=>'Electric', 'type_b'=>'', 'sprite_url'=>'/sprites/manectric.png',
			'hp'=>'70', 'attack'=>'75', 'defense'=>'80', 'sp_atk'=>'135', 'sp_def'=>'80', 'speed'=>'135'),

			array('name'=>'Plusle', 'type_a'=>'Electric', 'type_b'=>'', 'sprite_url'=>'/sprites/plusle.png',
			'hp'=>'60', 'attack'=>'50', 'defense'=>'40', 'sp_atk'=>'85', 'sp_def'=>'75', 'speed'=>'95'),

			array('name'=>'Minun', 'type_a'=>'Electric', 'type_b'=>'', 'sprite_url'=>'/sprites/minun.png',
			'hp'=>'60', 'attack'=>'40', 'defense'=>'50', 'sp_atk'=>'85', 'sp_def'=>'75', 'speed'=>'95'),

			array('name'=>'Volbeat', 'type_a'=>'Bug', 'type_b'=>'', 'sprite_url'=>'/sprites/volbeat.png',
			'hp'=>'65', 'attack'=>'73', 'defense'=>'55', 'sp_atk'=>'47', 'sp_def'=>'75', 'speed'=>'85'),

			array('name'=>'Illumise', 'type_a'=>'Bug', 'type_b'=>'', 'sprite_url'=>'/sprites/illumise.png',
			'hp'=>'65', 'attack'=>'47', 'defense'=>'55', 'sp_atk'=>'47', 'sp_def'=>'75', 'speed'=>'85'),

			array('name'=>'Roselia', 'type_a'=>'Grass', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/roselia.png',
			'hp'=>'50', 'attack'=>'60', 'defense'=>'45', 'sp_atk'=>'100', 'sp_def'=>'80', 'speed'=>'65'),

			array('name'=>'Gulpin', 'type_a'=>'Poison', 'type_b'=>'', 'sprite_url'=>'/sprites/gulpin.png',
			'hp'=>'70', 'attack'=>'43', 'defense'=>'53', 'sp_atk'=>'43', 'sp_def'=>'53', 'speed'=>'40'),

			array('name'=>'Swalot', 'type_a'=>'Fighting', 'type_b'=>'', 'sprite_url'=>'/sprites/swalot.png',
			'hp'=>'100', 'attack'=>'73', 'defense'=>'83', 'sp_atk'=>'73', 'sp_def'=>'83', 'speed'=>'55'),

			array('name'=>'Carvanha', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/carvanha.png',
			'hp'=>'45', 'attack'=>'90', 'defense'=>'20', 'sp_atk'=>'65', 'sp_def'=>'20', 'speed'=>'65'),

			array('name'=>'Sharpedo', 'type_a'=>'Water', 'type_b'=>'Dark', 'sprite_url'=>'/sprites/sharpedo.png',
			'hp'=>'70', 'attack'=>'120', 'defense'=>'40', 'sp_atk'=>'95', 'sp_def'=>'40', 'speed'=>'95'),

			array('name'=>'Wailmer', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/wailmer.png',
			'hp'=>'130', 'attack'=>'70', 'defense'=>'35', 'sp_atk'=>'70', 'sp_def'=>'35', 'speed'=>'60'),

			array('name'=>'Wailord', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/wailord.png',
			'hp'=>'170', 'attack'=>'90', 'defense'=>'45', 'sp_atk'=>'90', 'sp_def'=>'45', 'speed'=>'60'),

			array('name'=>'Numel', 'type_a'=>'Fire', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/numel.png',
			'hp'=>'60', 'attack'=>'60', 'defense'=>'40', 'sp_atk'=>'65', 'sp_def'=>'45', 'speed'=>'35'),

			array('name'=>'Camerupt', 'type_a'=>'Fire', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/camerupt.png',
			'hp'=>'70', 'attack'=>'100', 'defense'=>'70', 'sp_atk'=>'105', 'sp_def'=>'75', 'speed'=>'40'),

			array('name'=>'Torkoal', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/torkoal.png',
			'hp'=>'70', 'attack'=>'85', 'defense'=>'140', 'sp_atk'=>'85', 'sp_def'=>'70', 'speed'=>'20'),

			array('name'=>'Spoink', 'type_a'=>'Psychic', 'type_b'=>'', 'sprite_url'=>'/sprites/spoink.png',
			'hp'=>'60', 'attack'=>'25', 'defense'=>'35', 'sp_atk'=>'70', 'sp_def'=>'80', 'speed'=>'60'),

			array('name'=>'Grumpig', 'type_a'=>'Psychic', 'type_b'=>'', 'sprite_url'=>'/sprites/grumpig.png',
			'hp'=>'80', 'attack'=>'45', 'defense'=>'65', 'sp_atk'=>'90', 'sp_def'=>'110', 'speed'=>'80'),

			array('name'=>'Spinda', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/spinda.png',
			'hp'=>'60', 'attack'=>'60', 'defense'=>'60', 'sp_atk'=>'60', 'sp_def'=>'60', 'speed'=>'60'),

			array('name'=>'Trapinch', 'type_a'=>'Ground', 'type_b'=>'', 'sprite_url'=>'/sprites/trapinch.png',
			'hp'=>'45', 'attack'=>'100', 'defense'=>'45', 'sp_atk'=>'45', 'sp_def'=>'45', 'speed'=>'10'),

			array('name'=>'Vibrava', 'type_a'=>'Ground', 'type_b'=>'Dragon', 'sprite_url'=>'/sprites/vibrava.png',
			'hp'=>'50', 'attack'=>'70', 'defense'=>'50', 'sp_atk'=>'50', 'sp_def'=>'50', 'speed'=>'70'),

			array('name'=>'Flygon', 'type_a'=>'Ground', 'type_b'=>'Dragon', 'sprite_url'=>'/sprites/flygon.png',
			'hp'=>'80', 'attack'=>'100', 'defense'=>'80', 'sp_atk'=>'80', 'sp_def'=>'80', 'speed'=>'100'),

			array('name'=>'Cacnea', 'type_a'=>'Grass', 'type_b'=>'', 'sprite_url'=>'/sprites/cacnea.png',
			'hp'=>'50', 'attack'=>'85', 'defense'=>'40', 'sp_atk'=>'85', 'sp_def'=>'40', 'speed'=>'35'),

			array('name'=>'Cacturne', 'type_a'=>'Grass', 'type_b'=>'Dark', 'sprite_url'=>'/sprites/cacturne.png',
			'hp'=>'70', 'attack'=>'115', 'defense'=>'60', 'sp_atk'=>'115', 'sp_def'=>'60', 'speed'=>'55'),

			array('name'=>'Swablu', 'type_a'=>'Normal', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/swablu.png',
			'hp'=>'45', 'attack'=>'40', 'defense'=>'60', 'sp_atk'=>'40', 'sp_def'=>'75', 'speed'=>'50'),

			array('name'=>'Altaria', 'type_a'=>'Dragon', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/altaria.png',
			'hp'=>'75', 'attack'=>'70', 'defense'=>'90', 'sp_atk'=>'70', 'sp_def'=>'105', 'speed'=>'80'),

			array('name'=>'Zangoose', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/zangoose.png',
			'hp'=>'73', 'attack'=>'115', 'defense'=>'60', 'sp_atk'=>'60', 'sp_def'=>'60', 'speed'=>'90'),

			array('name'=>'Seviper', 'type_a'=>'Poison', 'type_b'=>'', 'sprite_url'=>'/sprites/seviper.png',
			'hp'=>'73', 'attack'=>'100', 'defense'=>'60', 'sp_atk'=>'100', 'sp_def'=>'60', 'speed'=>'65'),

			array('name'=>'Lunatone', 'type_a'=>'Rock', 'type_b'=>'Psychic', 'sprite_url'=>'/sprites/lunatone.png',
			'hp'=>'70', 'attack'=>'55', 'defense'=>'65', 'sp_atk'=>'95', 'sp_def'=>'85', 'speed'=>'70'),

			array('name'=>'Solrock', 'type_a'=>'Rock', 'type_b'=>'Psychic', 'sprite_url'=>'/sprites/solrock.png',
			'hp'=>'70', 'attack'=>'95', 'defense'=>'85', 'sp_atk'=>'55', 'sp_def'=>'65', 'speed'=>'70'),

			array('name'=>'Barboach', 'type_a'=>'Water', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/barboach.png',
			'hp'=>'50', 'attack'=>'48', 'defense'=>'43', 'sp_atk'=>'46', 'sp_def'=>'41', 'speed'=>'60'),

			array('name'=>'Whiscash', 'type_a'=>'Water', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/whiscash.png',
			'hp'=>'110', 'attack'=>'78', 'defense'=>'73', 'sp_atk'=>'76', 'sp_def'=>'71', 'speed'=>'60'),

			array('name'=>'Corphish', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/corphish.png',
			'hp'=>'43', 'attack'=>'80', 'defense'=>'65', 'sp_atk'=>'50', 'sp_def'=>'35', 'speed'=>'35'),

			array('name'=>'Crawdaunt', 'type_a'=>'Water', 'type_b'=>'Dark', 'sprite_url'=>'/sprites/crawdaunt.png',
			'hp'=>'63', 'attack'=>'120', 'defense'=>'85', 'sp_atk'=>'50', 'sp_def'=>'35', 'speed'=>'35'),

			array('name'=>'Baltoy', 'type_a'=>'Ground', 'type_b'=>'Psychic', 'sprite_url'=>'/sprites/baltoy.png',
			'hp'=>'40', 'attack'=>'40', 'defense'=>'55', 'sp_atk'=>'40', 'sp_def'=>'70', 'speed'=>'55'),

			array('name'=>'Claydol', 'type_a'=>'Ground', 'type_b'=>'Psychic', 'sprite_url'=>'/sprites/claydol.png',
			'hp'=>'60', 'attack'=>'70', 'defense'=>'105', 'sp_atk'=>'70', 'sp_def'=>'120', 'speed'=>'75'),

			array('name'=>'Lileep', 'type_a'=>'Rock', 'type_b'=>'Grass', 'sprite_url'=>'/sprites/lileep.png',
			'hp'=>'66', 'attack'=>'41', 'defense'=>'77', 'sp_atk'=>'61', 'sp_def'=>'87', 'speed'=>'23'),

			array('name'=>'Cradily', 'type_a'=>'Rock', 'type_b'=>'Grass', 'sprite_url'=>'/sprites/cradily.png',
			'hp'=>'86', 'attack'=>'81', 'defense'=>'97', 'sp_atk'=>'81', 'sp_def'=>'107', 'speed'=>'43'),

			array('name'=>'Anorith', 'type_a'=>'Rock', 'type_b'=>'Bug', 'sprite_url'=>'/sprites/anorith.png',
			'hp'=>'45', 'attack'=>'95', 'defense'=>'50', 'sp_atk'=>'40', 'sp_def'=>'50', 'speed'=>'75'),

			array('name'=>'Armaldo', 'type_a'=>'Rock', 'type_b'=>'Bug', 'sprite_url'=>'/sprites/armaldo.png',
			'hp'=>'75', 'attack'=>'125', 'defense'=>'100', 'sp_atk'=>'70', 'sp_def'=>'80', 'speed'=>'45'),

			array('name'=>'Feebas', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/feebas.png',
			'hp'=>'20', 'attack'=>'15', 'defense'=>'20', 'sp_atk'=>'10', 'sp_def'=>'55', 'speed'=>'80'),

			array('name'=>'Milotic', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/milotic.png',
			'hp'=>'95', 'attack'=>'60', 'defense'=>'79', 'sp_atk'=>'100', 'sp_def'=>'125', 'speed'=>'81'),

			array('name'=>'Castform', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/castform.png',
			'hp'=>'70', 'attack'=>'70', 'defense'=>'70', 'sp_atk'=>'70', 'sp_def'=>'70', 'speed'=>'70'),

			array('name'=>'Kecleon', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/kecleon.png',
			'hp'=>'60', 'attack'=>'90', 'defense'=>'70', 'sp_atk'=>'60', 'sp_def'=>'120', 'speed'=>'40'),

			array('name'=>'Shuppet', 'type_a'=>'Ghost', 'type_b'=>'', 'sprite_url'=>'/sprites/shuppet.png',
			'hp'=>'44', 'attack'=>'75', 'defense'=>'35', 'sp_atk'=>'63', 'sp_def'=>'33', 'speed'=>'45'),

			array('name'=>'Banette', 'type_a'=>'Ghost', 'type_b'=>'', 'sprite_url'=>'/sprites/banette.png',
			'hp'=>'64', 'attack'=>'115', 'defense'=>'65', 'sp_atk'=>'83', 'sp_def'=>'63', 'speed'=>'65'),

			array('name'=>'Duskull', 'type_a'=>'Ghost', 'type_b'=>'', 'sprite_url'=>'/sprites/duskull.png',
			'hp'=>'20', 'attack'=>'40', 'defense'=>'90', 'sp_atk'=>'30', 'sp_def'=>'90', 'speed'=>'25'),

			array('name'=>'Dusclops', 'type_a'=>'Ghost', 'type_b'=>'', 'sprite_url'=>'/sprites/dusclops.png',
			'hp'=>'40', 'attack'=>'70', 'defense'=>'130', 'sp_atk'=>'60', 'sp_def'=>'130', 'speed'=>'25'),

			array('name'=>'Tropius', 'type_a'=>'Grass', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/tropius.png',
			'hp'=>'99', 'attack'=>'68', 'defense'=>'83', 'sp_atk'=>'72', 'sp_def'=>'87', 'speed'=>'51'),

			array('name'=>'Chimecho', 'type_a'=>'Psychic', 'type_b'=>'', 'sprite_url'=>'/sprites/chimecho.png',
			'hp'=>'65', 'attack'=>'50', 'defense'=>'70', 'sp_atk'=>'95', 'sp_def'=>'80', 'speed'=>'65'),

			array('name'=>'Absol', 'type_a'=>'Dark', 'type_b'=>'', 'sprite_url'=>'/sprites/absol.png',
			'hp'=>'65', 'attack'=>'130', 'defense'=>'60', 'sp_atk'=>'75', 'sp_def'=>'60', 'speed'=>'75'),

			array('name'=>'Wynaut', 'type_a'=>'Psychic', 'type_b'=>'', 'sprite_url'=>'/sprites/wynaut.png',
			'hp'=>'95', 'attack'=>'23', 'defense'=>'48', 'sp_atk'=>'23', 'sp_def'=>'48', 'speed'=>'23'),

			array('name'=>'Snorunt', 'type_a'=>'Ice', 'type_b'=>'', 'sprite_url'=>'/sprites/snorunt.png',
			'hp'=>'50', 'attack'=>'50', 'defense'=>'50', 'sp_atk'=>'50', 'sp_def'=>'50', 'speed'=>'50'),

			array('name'=>'Glalie', 'type_a'=>'Ice', 'type_b'=>'', 'sprite_url'=>'/sprites/glalie.png',
			'hp'=>'80', 'attack'=>'80', 'defense'=>'80', 'sp_atk'=>'80', 'sp_def'=>'80', 'speed'=>'80'),

			array('name'=>'Spheal', 'type_a'=>'Ice', 'type_b'=>'Water', 'sprite_url'=>'/sprites/spheal.png',
			'hp'=>'70', 'attack'=>'40', 'defense'=>'50', 'sp_atk'=>'55', 'sp_def'=>'50', 'speed'=>'25'),

			array('name'=>'Sealeo', 'type_a'=>'Ice', 'type_b'=>'Water', 'sprite_url'=>'/sprites/sealeo.png',
			'hp'=>'70', 'attack'=>'40', 'defense'=>'50', 'sp_atk'=>'55', 'sp_def'=>'50', 'speed'=>'25'),

			array('name'=>'Walrein', 'type_a'=>'Ice', 'type_b'=>'Water', 'sprite_url'=>'/sprites/walrein.png',
			'hp'=>'110', 'attack'=>'80', 'defense'=>'90', 'sp_atk'=>'95', 'sp_def'=>'90', 'speed'=>'65'),

			array('name'=>'Clamperl', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/clamperl.png',
			'hp'=>'35', 'attack'=>'64', 'defense'=>'85', 'sp_atk'=>'74', 'sp_def'=>'55', 'speed'=>'32'),

			array('name'=>'Huntail', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/huntail.png',
			'hp'=>'55', 'attack'=>'104', 'defense'=>'105', 'sp_atk'=>'94', 'sp_def'=>'75', 'speed'=>'52'),

			array('name'=>'Gorebyss', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/gorebyss.png',
			'hp'=>'55', 'attack'=>'84', 'defense'=>'105', 'sp_atk'=>'114', 'sp_def'=>'75', 'speed'=>'52'),

			array('name'=>'Relicanth', 'type_a'=>'Water', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/relicanth.png',
			'hp'=>'100', 'attack'=>'90', 'defense'=>'130', 'sp_atk'=>'45', 'sp_def'=>'65', 'speed'=>'55'),

			array('name'=>'Luvdisc', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/luvdisc.png',
			'hp'=>'43', 'attack'=>'30', 'defense'=>'55', 'sp_atk'=>'40', 'sp_def'=>'65', 'speed'=>'97'),

			array('name'=>'Bagon', 'type_a'=>'Dragon', 'type_b'=>'', 'sprite_url'=>'/sprites/bagon.png',
			'hp'=>'45', 'attack'=>'75', 'defense'=>'60', 'sp_atk'=>'40', 'sp_def'=>'30', 'speed'=>'50'),

			array('name'=>'Shelgon', 'type_a'=>'Dragon', 'type_b'=>'', 'sprite_url'=>'/sprites/shelgon.png',
			'hp'=>'65', 'attack'=>'95', 'defense'=>'100', 'sp_atk'=>'60', 'sp_def'=>'50', 'speed'=>'50'),

			array('name'=>'Salamence', 'type_a'=>'Dragon', 'type_b'=>'', 'sprite_url'=>'/sprites/salamence.png',
			'hp'=>'95', 'attack'=>'135', 'defense'=>'80', 'sp_atk'=>'110', 'sp_def'=>'80', 'speed'=>'110'),

			array('name'=>'Beldum', 'type_a'=>'Steel', 'type_b'=>'Psychic', 'sprite_url'=>'/sprites/beldum.png',
			'hp'=>'40', 'attack'=>'55', 'defense'=>'80', 'sp_atk'=>'35', 'sp_def'=>'60', 'speed'=>'30'),

			array('name'=>'Metang', 'type_a'=>'Steel', 'type_b'=>'Psychic', 'sprite_url'=>'/sprites/metang.png',
			'hp'=>'60', 'attack'=>'75', 'defense'=>'100', 'sp_atk'=>'55', 'sp_def'=>'80', 'speed'=>'50'),

			array('name'=>'Metagross', 'type_a'=>'Steel', 'type_b'=>'Psychic', 'sprite_url'=>'/sprites/metagross.png',
			'hp'=>'80', 'attack'=>'135', 'defense'=>'130', 'sp_atk'=>'95', 'sp_def'=>'90', 'speed'=>'70'),

			array('name'=>'Regirock', 'type_a'=>'Rock', 'type_b'=>'', 'sprite_url'=>'/sprites/regirock.png',
			'hp'=>'80', 'attack'=>'100', 'defense'=>'200', 'sp_atk'=>'50', 'sp_def'=>'100', 'speed'=>'50'),

			array('name'=>'Regice', 'type_a'=>'Ice', 'type_b'=>'', 'sprite_url'=>'/sprites/regice.png',
			'hp'=>'80', 'attack'=>'50', 'defense'=>'100', 'sp_atk'=>'100', 'sp_def'=>'200', 'speed'=>'50'),

			array('name'=>'Registeel', 'type_a'=>'Steel', 'type_b'=>'', 'sprite_url'=>'/sprites/registeel.png',
			'hp'=>'80', 'attack'=>'75', 'defense'=>'150', 'sp_atk'=>'75', 'sp_def'=>'150', 'speed'=>'50'),

			array('name'=>'Latias', 'type_a'=>'Dragon', 'type_b'=>'Psychic', 'sprite_url'=>'/sprites/latias.png',
			'hp'=>'80', 'attack'=>'80', 'defense'=>'90', 'sp_atk'=>'110', 'sp_def'=>'130', 'speed'=>'110'),

			array('name'=>'Latios', 'type_a'=>'Dragon', 'type_b'=>'Psychic', 'sprite_url'=>'/sprites/latios.png',
			'hp'=>'80', 'attack'=>'90', 'defense'=>'80', 'sp_atk'=>'130', 'sp_def'=>'110', 'speed'=>'110'),

			array('name'=>'Kyogre', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/kyogre.png',
			'hp'=>'100', 'attack'=>'100', 'defense'=>'90', 'sp_atk'=>'150', 'sp_def'=>'140', 'speed'=>'90'),

			array('name'=>'Groudon', 'type_a'=>'Ground', 'type_b'=>'', 'sprite_url'=>'/sprites/groudon.png',
			'hp'=>'100', 'attack'=>'150', 'defense'=>'140', 'sp_atk'=>'100', 'sp_def'=>'90', 'speed'=>'90'),

			array('name'=>'Rayquaza', 'type_a'=>'Dragon', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/rayquaza.png',
			'hp'=>'105', 'attack'=>'150', 'defense'=>'90', 'sp_atk'=>'150', 'sp_def'=>'90', 'speed'=>'95'),

			array('name'=>'Jirachi', 'type_a'=>'Steel', 'type_b'=>'Psychic', 'sprite_url'=>'/sprites/jirachi.png',
			'hp'=>'100', 'attack'=>'100', 'defense'=>'100', 'sp_atk'=>'100', 'sp_def'=>'100', 'speed'=>'100'),

			array('name'=>'Deoxys', 'type_a'=>'Psychic', 'type_b'=>'', 'sprite_url'=>'/sprites/deoxys.png',
			'hp'=>'50', 'attack'=>'150', 'defense'=>'50', 'sp_atk'=>'150', 'sp_def'=>'50', 'speed'=>'150'),

			array('name'=>'Turtwig', 'type_a'=>'Grass', 'type_b'=>'', 'sprite_url'=>'/sprites/turtwig.png',
			'hp'=>'55', 'attack'=>'68', 'defense'=>'64', 'sp_atk'=>'45', 'sp_def'=>'55', 'speed'=>'31'),

			array('name'=>'Grotle', 'type_a'=>'Grass', 'type_b'=>'', 'sprite_url'=>'/sprites/grotle.png',
			'hp'=>'75', 'attack'=>'89', 'defense'=>'85', 'sp_atk'=>'55', 'sp_def'=>'65', 'speed'=>'36'),

			array('name'=>'Torterra', 'type_a'=>'Grass', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/torterra.png',
			'hp'=>'95', 'attack'=>'109', 'defense'=>'105', 'sp_atk'=>'75', 'sp_def'=>'85', 'speed'=>'56'),

			array('name'=>'Chimchar', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/chimchar.png',
			'hp'=>'44', 'attack'=>'58', 'defense'=>'44', 'sp_atk'=>'58', 'sp_def'=>'55', 'speed'=>'61'),

			array('name'=>'Monferno', 'type_a'=>'Fire', 'type_b'=>'Fighting', 'sprite_url'=>'/sprites/monferno.png',
			'hp'=>'64', 'attack'=>'78', 'defense'=>'52', 'sp_atk'=>'78', 'sp_def'=>'52', 'speed'=>'81'),

			array('name'=>'Infernape', 'type_a'=>'Fire', 'type_b'=>'Fighting', 'sprite_url'=>'/sprites/infernape.png',
			'hp'=>'76', 'attack'=>'104', 'defense'=>'71', 'sp_atk'=>'104', 'sp_def'=>'71', 'speed'=>'108'),

			array('name'=>'Piplup', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/piplup.png',
			'hp'=>'64', 'attack'=>'66', 'defense'=>'68', 'sp_atk'=>'81', 'sp_def'=>'76', 'speed'=>'50'),

			array('name'=>'Empoleon', 'type_a'=>'Water', 'type_b'=>'Steel', 'sprite_url'=>'/sprites/empoleon.png',
			'hp'=>'84', 'attack'=>'86', 'defense'=>'88', 'sp_atk'=>'11', 'sp_def'=>'101', 'speed'=>'60'),

			array('name'=>'Starly', 'type_a'=>'Normal', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/starly.png',
			'hp'=>'40', 'attack'=>'55', 'defense'=>'30', 'sp_atk'=>'30', 'sp_def'=>'30', 'speed'=>'60'),

			array('name'=>'Staravia', 'type_a'=>'Normal', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/staravia.png',
			'hp'=>'55', 'attack'=>'75', 'defense'=>'50', 'sp_atk'=>'40', 'sp_def'=>'40', 'speed'=>'80'),

			array('name'=>'Staraptor', 'type_a'=>'Normal', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/staraptor.png',
			'hp'=>'85', 'attack'=>'120', 'defense'=>'70', 'sp_atk'=>'50', 'sp_def'=>'60', 'speed'=>'100'),

			array('name'=>'Bidoof', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/bidoof.png',
			'hp'=>'59', 'attack'=>'45', 'defense'=>'40', 'sp_atk'=>'35', 'sp_def'=>'40', 'speed'=>'41'),

			array('name'=>'Bibarel', 'type_a'=>'Normal', 'type_b'=>'Water', 'sprite_url'=>'/sprites/bibarel.png',
			'hp'=>'79', 'attack'=>'85', 'defense'=>'60', 'sp_atk'=>'55', 'sp_def'=>'60', 'speed'=>'71'),

			array('name'=>'Kricketot', 'type_a'=>'Bug', 'type_b'=>'', 'sprite_url'=>'/sprites/kricketot.png',
			'hp'=>'37', 'attack'=>'25', 'defense'=>'41', 'sp_atk'=>'25', 'sp_def'=>'41', 'speed'=>'25'),

			array('name'=>'Kricketune', 'type_a'=>'Bug', 'type_b'=>'', 'sprite_url'=>'/sprites/kricketune.png',
			'hp'=>'77', 'attack'=>'85', 'defense'=>'51', 'sp_atk'=>'55', 'sp_def'=>'51', 'speed'=>'65'),

			array('name'=>'Shinx', 'type_a'=>'Electric', 'type_b'=>'', 'sprite_url'=>'/sprites/shinx.png',
			'hp'=>'45', 'attack'=>'65', 'defense'=>'34', 'sp_atk'=>'40', 'sp_def'=>'34', 'speed'=>'45'),

			array('name'=>'Luxio', 'type_a'=>'Electric', 'type_b'=>'', 'sprite_url'=>'/sprites/luxio.png',
			'hp'=>'60', 'attack'=>'85', 'defense'=>'49', 'sp_atk'=>'60', 'sp_def'=>'49', 'speed'=>'60'),

			array('name'=>'Luxray', 'type_a'=>'Electric', 'type_b'=>'', 'sprite_url'=>'/sprites/luxio.png',
			'hp'=>'60', 'attack'=>'85', 'defense'=>'49', 'sp_atk'=>'60', 'sp_def'=>'49', 'speed'=>'60'),

			array('name'=>'Budew', 'type_a'=>'Grass', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/budew.png',
			'hp'=>'40', 'attack'=>'30', 'defense'=>'35', 'sp_atk'=>'50', 'sp_def'=>'70', 'speed'=>'55'),

			array('name'=>'Roserade', 'type_a'=>'Grass', 'type_b'=>'Poison', 'sprite_url'=>'/sprites/roserade.png',
			'hp'=>'60', 'attack'=>'70', 'defense'=>'65', 'sp_atk'=>'125', 'sp_def'=>'105', 'speed'=>'90'),

			array('name'=>'Cranidos', 'type_a'=>'Rock', 'type_b'=>'', 'sprite_url'=>'/sprites/cranidos.png',
			'hp'=>'67', 'attack'=>'125', 'defense'=>'40', 'sp_atk'=>'30', 'sp_def'=>'30', 'speed'=>'58'),

			array('name'=>'Rampardos', 'type_a'=>'Rock', 'type_b'=>'', 'sprite_url'=>'/sprites/rampardos.png',
			'hp'=>'97', 'attack'=>'165', 'defense'=>'60', 'sp_atk'=>'65', 'sp_def'=>'50', 'speed'=>'58'),

			array('name'=>'Shieldon', 'type_a'=>'Rock', 'type_b'=>'Steel', 'sprite_url'=>'/sprites/shieldon.png',
			'hp'=>'30', 'attack'=>'42', 'defense'=>'118', 'sp_atk'=>'42', 'sp_def'=>'88', 'speed'=>'30'),

			array('name'=>'Bastiodon', 'type_a'=>'Rock', 'type_b'=>'Steel', 'sprite_url'=>'/sprites/bastiodon.png',
			'hp'=>'60', 'attack'=>'52', 'defense'=>'168', 'sp_atk'=>'47', 'sp_def'=>'138', 'speed'=>'30'),

			array('name'=>'Burmy', 'type_a'=>'Bug', 'type_b'=>'', 'sprite_url'=>'/sprites/burmy.png',
			'hp'=>'60', 'attack'=>'52', 'defense'=>'168', 'sp_atk'=>'47', 'sp_def'=>'138', 'speed'=>'30'),

			array('name'=>'Wormadam', 'type_a'=>'Bug', 'type_b'=>'Grass', 'sprite_url'=>'/sprites/wormadam.png',
			'hp'=>'60', 'attack'=>'59', 'defense'=>'85', 'sp_atk'=>'79', 'sp_def'=>'105', 'speed'=>'36'),

			array('name'=>'Mothim', 'type_a'=>'Bug', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/mothim.png',
			'hp'=>'70', 'attack'=>'94', 'defense'=>'50', 'sp_atk'=>'94', 'sp_def'=>'50', 'speed'=>'66'),

			array('name'=>'Combee', 'type_a'=>'Bug', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/combee.png',
			'hp'=>'30', 'attack'=>'30', 'defense'=>'42', 'sp_atk'=>'30', 'sp_def'=>'42', 'speed'=>'70'),

			array('name'=>'Vespiquen', 'type_a'=>'Bug', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/vespiquen.png',
			'hp'=>'70', 'attack'=>'80', 'defense'=>'102', 'sp_atk'=>'80', 'sp_def'=>'102', 'speed'=>'40'),

			array('name'=>'Pachirisu', 'type_a'=>'Electric', 'type_b'=>'', 'sprite_url'=>'/sprites/pachirisu.png',
			'hp'=>'60', 'attack'=>'45', 'defense'=>'70', 'sp_atk'=>'45', 'sp_def'=>'90', 'speed'=>'95'),

			array('name'=>'Buizel', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/buizel.png',
			'hp'=>'55', 'attack'=>'65', 'defense'=>'35', 'sp_atk'=>'60', 'sp_def'=>'30', 'speed'=>'85'),

			array('name'=>'Floatzel', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/floatzel.png',
			'hp'=>'85', 'attack'=>'105', 'defense'=>'55', 'sp_atk'=>'85', 'sp_def'=>'50', 'speed'=>'115'),

			array('name'=>'Cherubi', 'type_a'=>'Grass', 'type_b'=>'', 'sprite_url'=>'/sprites/cherubi.png',
			'hp'=>'45', 'attack'=>'35', 'defense'=>'45', 'sp_atk'=>'62', 'sp_def'=>'53', 'speed'=>'35'),

			array('name'=>'Cherrim', 'type_a'=>'Grass', 'type_b'=>'', 'sprite_url'=>'/sprites/cherrim.png',
			'hp'=>'70', 'attack'=>'60', 'defense'=>'70', 'sp_atk'=>'87', 'sp_def'=>'78', 'speed'=>'85'),

			array('name'=>'Shellos', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/shellos.png',
			'hp'=>'50', 'attack'=>'150', 'defense'=>'50', 'sp_atk'=>'150', 'sp_def'=>'50', 'speed'=>'150'),

			array('name'=>'Gastrodon', 'type_a'=>'Water', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/gastrodon.png',
			'hp'=>'111', 'attack'=>'83', 'defense'=>'68', 'sp_atk'=>'92', 'sp_def'=>'82', 'speed'=>'39'),

			array('name'=>'Ambipom', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/ambipom.png',
			'hp'=>'75', 'attack'=>'100', 'defense'=>'66', 'sp_atk'=>'60', 'sp_def'=>'66', 'speed'=>'115'),

			array('name'=>'Drifloon', 'type_a'=>'Ghost', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/drifloon.png',
			'hp'=>'90', 'attack'=>'50', 'defense'=>'34', 'sp_atk'=>'60', 'sp_def'=>'44', 'speed'=>'70'),

			array('name'=>'Drifblim', 'type_a'=>'Ghost', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/drifblim.png',
			'hp'=>'150', 'attack'=>'80', 'defense'=>'44', 'sp_atk'=>'90', 'sp_def'=>'54', 'speed'=>'80'),

			array('name'=>'Buneary', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/buneary.png',
			'hp'=>'55', 'attack'=>'66', 'defense'=>'44', 'sp_atk'=>'44', 'sp_def'=>'56', 'speed'=>'85'),

			array('name'=>'Lopunny', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/lopunny.png',
			'hp'=>'65', 'attack'=>'76', 'defense'=>'84', 'sp_atk'=>'54', 'sp_def'=>'96', 'speed'=>'105'),

			array('name'=>'Mismagius', 'type_a'=>'Ghost', 'type_b'=>'', 'sprite_url'=>'/sprites/mismagius.png',
			'hp'=>'60', 'attack'=>'60', 'defense'=>'60', 'sp_atk'=>'105', 'sp_def'=>'105', 'speed'=>'105'),

			array('name'=>'Honchkrow', 'type_a'=>'Dark', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/honchkrow.png',
			'hp'=>'100', 'attack'=>'125', 'defense'=>'52', 'sp_atk'=>'105', 'sp_def'=>'52', 'speed'=>'71'),

			array('name'=>'Glameow', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/glameow.png',
			'hp'=>'49', 'attack'=>'55', 'defense'=>'42', 'sp_atk'=>'42', 'sp_def'=>'37', 'speed'=>'85'),

			array('name'=>'Purugly', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/purugly.png',
			'hp'=>'71', 'attack'=>'82', 'defense'=>'64', 'sp_atk'=>'64', 'sp_def'=>'59', 'speed'=>'112'),

			array('name'=>'Chingling', 'type_a'=>'Psychic', 'type_b'=>'', 'sprite_url'=>'/sprites/chingling.png',
			'hp'=>'45', 'attack'=>'30', 'defense'=>'50', 'sp_atk'=>'65', 'sp_def'=>'50', 'speed'=>'45'),

			array('name'=>'Stunky', 'type_a'=>'Poison', 'type_b'=>'Dark', 'sprite_url'=>'/sprites/stunky.png',
			'hp'=>'62', 'attack'=>'63', 'defense'=>'47', 'sp_atk'=>'41', 'sp_def'=>'41', 'speed'=>'74'),

			array('name'=>'Skuntank', 'type_a'=>'Poison', 'type_b'=>'Dark', 'sprite_url'=>'/sprites/skuntank.png',
			'hp'=>'103', 'attack'=>'93', 'defense'=>'67', 'sp_atk'=>'71', 'sp_def'=>'61', 'speed'=>'84'),

			array('name'=>'Bronzor', 'type_a'=>'Steel', 'type_b'=>'Psychic', 'sprite_url'=>'/sprites/bronzor.png',
			'hp'=>'57', 'attack'=>'24', 'defense'=>'86', 'sp_atk'=>'24', 'sp_def'=>'86', 'speed'=>'23'),

			array('name'=>'Bronzong', 'type_a'=>'Steel', 'type_b'=>'Psychic', 'sprite_url'=>'/sprites/bronzong.png',
			'hp'=>'67', 'attack'=>'89', 'defense'=>'116', 'sp_atk'=>'79', 'sp_def'=>'116', 'speed'=>'33'),

			array('name'=>'Bonsly', 'type_a'=>'Rock', 'type_b'=>'', 'sprite_url'=>'/sprites/bonsly.png',
			'hp'=>'50', 'attack'=>'85', 'defense'=>'95', 'sp_atk'=>'10', 'sp_def'=>'45', 'speed'=>'10'),

			array('name'=>'Mime Jr.', 'type_a'=>'Psychic', 'type_b'=>'Fairy', 'sprite_url'=>'/sprites/mime-jr.png',
			'hp'=>'20', 'attack'=>'25', 'defense'=>'45', 'sp_atk'=>'70', 'sp_def'=>'90', 'speed'=>'60'),

			array('name'=>'Happiny', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/happiny.png',
			'hp'=>'100', 'attack'=>'5', 'defense'=>'5', 'sp_atk'=>'15', 'sp_def'=>'65', 'speed'=>'30'),

			array('name'=>'Chatot', 'type_a'=>'Normal', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/chatot.png',
			'hp'=>'76', 'attack'=>'65', 'defense'=>'45', 'sp_atk'=>'92', 'sp_def'=>'42', 'speed'=>'91'),

			array('name'=>'Spiritomb', 'type_a'=>'Ghost', 'type_b'=>'Dark', 'sprite_url'=>'/sprites/spiritomb.png',
			'hp'=>'50', 'attack'=>'92', 'defense'=>'108', 'sp_atk'=>'92', 'sp_def'=>'108', 'speed'=>'35'),

			array('name'=>'Gible', 'type_a'=>'Dragon', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/gible.png',
			'hp'=>'58', 'attack'=>'70', 'defense'=>'45', 'sp_atk'=>'40', 'sp_def'=>'45', 'speed'=>'42'),

			array('name'=>'Gabite', 'type_a'=>'Dragon', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/gabite.png',
			'hp'=>'68', 'attack'=>'90', 'defense'=>'65', 'sp_atk'=>'50', 'sp_def'=>'55', 'speed'=>'82'),

			array('name'=>'Garchomp', 'type_a'=>'Dragon', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/garchomp.png',
			'hp'=>'108', 'attack'=>'130', 'defense'=>'95', 'sp_atk'=>'80', 'sp_def'=>'85', 'speed'=>'102'),

			array('name'=>'Munchlax', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/munchlax.png',
			'hp'=>'135', 'attack'=>'85', 'defense'=>'40', 'sp_atk'=>'40', 'sp_def'=>'85', 'speed'=>'5'),

			array('name'=>'Riolu', 'type_a'=>'Fighting', 'type_b'=>'', 'sprite_url'=>'/sprites/riolu.png',
			'hp'=>'40', 'attack'=>'70', 'defense'=>'40', 'sp_atk'=>'35', 'sp_def'=>'40', 'speed'=>'60'),

			array('name'=>'Lucario', 'type_a'=>'Fighting', 'type_b'=>'Steel', 'sprite_url'=>'/sprites/lucario.png',
			'hp'=>'70', 'attack'=>'110', 'defense'=>'70', 'sp_atk'=>'115', 'sp_def'=>'70', 'speed'=>'90'),

			array('name'=>'Hippopotas', 'type_a'=>'Ground', 'type_b'=>'', 'sprite_url'=>'/sprites/hippopotas.png',
			'hp'=>'68', 'attack'=>'72', 'defense'=>'78', 'sp_atk'=>'38', 'sp_def'=>'42', 'speed'=>'32'),

			array('name'=>'Hippowdon', 'type_a'=>'Ground', 'type_b'=>'', 'sprite_url'=>'/sprites/hippowdon.png',
			'hp'=>'108', 'attack'=>'112', 'defense'=>'118', 'sp_atk'=>'68', 'sp_def'=>'72', 'speed'=>'47'),

			array('name'=>'Skorupi', 'type_a'=>'Poison', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/skorupi.png',
			'hp'=>'40', 'attack'=>'50', 'defense'=>'90', 'sp_atk'=>'30', 'sp_def'=>'55', 'speed'=>'65'),

			array('name'=>'Drapion', 'type_a'=>'Poison', 'type_b'=>'Dark', 'sprite_url'=>'/sprites/drapion.png',
			'hp'=>'70', 'attack'=>'90', 'defense'=>'110', 'sp_atk'=>'60', 'sp_def'=>'75', 'speed'=>'95'),

			array('name'=>'Croagunk', 'type_a'=>'Poison', 'type_b'=>'Fighting', 'sprite_url'=>'/sprites/croagunk.png',
			'hp'=>'48', 'attack'=>'61', 'defense'=>'40', 'sp_atk'=>'61', 'sp_def'=>'40', 'speed'=>'50'),

			array('name'=>'Toxicroak', 'type_a'=>'Poison', 'type_b'=>'Fighting', 'sprite_url'=>'/sprites/toxicroak.png',
			'hp'=>'83', 'attack'=>'106', 'defense'=>'65', 'sp_atk'=>'86', 'sp_def'=>'65', 'speed'=>'85'),

			array('name'=>'Carnivine', 'type_a'=>'Grass', 'type_b'=>'', 'sprite_url'=>'/sprites/carnivine.png',
			'hp'=>'74', 'attack'=>'100', 'defense'=>'72', 'sp_atk'=>'90', 'sp_def'=>'72', 'speed'=>'46'),

			array('name'=>'Finneon', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/finneon.png',
			'hp'=>'49', 'attack'=>'49', 'defense'=>'56', 'sp_atk'=>'49', 'sp_def'=>'61', 'speed'=>'66'),

			array('name'=>'Lumineon', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/lumineon.png',
			'hp'=>'69', 'attack'=>'69', 'defense'=>'76', 'sp_atk'=>'69', 'sp_def'=>'86', 'speed'=>'91'),

			array('name'=>'Mantyke', 'type_a'=>'Water', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/mantyke.png',
			'hp'=>'45', 'attack'=>'20', 'defense'=>'50', 'sp_atk'=>'60', 'sp_def'=>'120', 'speed'=>'120'),

			array('name'=>'Snover', 'type_a'=>'Grass', 'type_b'=>'Ice', 'sprite_url'=>'/sprites/snover.png',
			'hp'=>'60', 'attack'=>'62', 'defense'=>'50', 'sp_atk'=>'62', 'sp_def'=>'60', 'speed'=>'40'),

			array('name'=>'Abomasnow', 'type_a'=>'Grass', 'type_b'=>'Ice', 'sprite_url'=>'/sprites/abomasnow.png',
			'hp'=>'90', 'attack'=>'92', 'defense'=>'75', 'sp_atk'=>'92', 'sp_def'=>'85', 'speed'=>'60'),

			array('name'=>'Weavile', 'type_a'=>'Dark', 'type_b'=>'Ice', 'sprite_url'=>'/sprites/weavile.png',
			'hp'=>'70', 'attack'=>'120', 'defense'=>'65', 'sp_atk'=>'45', 'sp_def'=>'85', 'speed'=>'125'),

			array('name'=>'Magnezone', 'type_a'=>'Electric', 'type_b'=>'Steel', 'sprite_url'=>'/sprites/magnezone.png',
			'hp'=>'70', 'attack'=>'70', 'defense'=>'115', 'sp_atk'=>'130', 'sp_def'=>'90', 'speed'=>'60'),

			array('name'=>'Lickilicky', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/lickilicky.png',
			'hp'=>'110', 'attack'=>'85', 'defense'=>'95', 'sp_atk'=>'80', 'sp_def'=>'95', 'speed'=>'50'),

			array('name'=>'Rhyperior', 'type_a'=>'Ground', 'type_b'=>'Rock', 'sprite_url'=>'/sprites/rhyperior.png',
			'hp'=>'115', 'attack'=>'140', 'defense'=>'130', 'sp_atk'=>'55', 'sp_def'=>'55', 'speed'=>'40'),

			array('name'=>'Tangrowth', 'type_a'=>'Grass', 'type_b'=>'', 'sprite_url'=>'/sprites/tangrowth.png',
			'hp'=>'100', 'attack'=>'100', 'defense'=>'125', 'sp_atk'=>'110', 'sp_def'=>'50', 'speed'=>'50'),

			array('name'=>'Electivire', 'type_a'=>'Electric', 'type_b'=>'', 'sprite_url'=>'/sprites/electivire.png',
			'hp'=>'75', 'attack'=>'123', 'defense'=>'67', 'sp_atk'=>'95', 'sp_def'=>'85', 'speed'=>'95'),

			array('name'=>'Magmortar', 'type_a'=>'Fire', 'type_b'=>'', 'sprite_url'=>'/sprites/magmortar.png',
			'hp'=>'75', 'attack'=>'95', 'defense'=>'67', 'sp_atk'=>'125', 'sp_def'=>'95', 'speed'=>'83'),

			array('name'=>'Togekiss', 'type_a'=>'Fairy', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/togekiss.png',
			'hp'=>'85', 'attack'=>'50', 'defense'=>'95', 'sp_atk'=>'120', 'sp_def'=>'115', 'speed'=>'80'),

			array('name'=>'Yanmega', 'type_a'=>'Bug', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/yanmega.png',
			'hp'=>'86', 'attack'=>'76', 'defense'=>'86', 'sp_atk'=>'116', 'sp_def'=>'56', 'speed'=>'95'),

			array('name'=>'Leafeon', 'type_a'=>'Grass', 'type_b'=>'', 'sprite_url'=>'/sprites/leafeon.png',
			'hp'=>'65', 'attack'=>'110', 'defense'=>'130', 'sp_atk'=>'60', 'sp_def'=>'65', 'speed'=>'95'),

			array('name'=>'Glaceon', 'type_a'=>'Ice', 'type_b'=>'', 'sprite_url'=>'/sprites/glaceon.png',
			'hp'=>'65', 'attack'=>'60', 'defense'=>'110', 'sp_atk'=>'130', 'sp_def'=>'95', 'speed'=>'65'),

			array('name'=>'Gliscor', 'type_a'=>'Ground', 'type_b'=>'Flying', 'sprite_url'=>'/sprites/gliscor.png',
			'hp'=>'75', 'attack'=>'95', 'defense'=>'125', 'sp_atk'=>'45', 'sp_def'=>'75', 'speed'=>'95'),

			array('name'=>'Mamoswine', 'type_a'=>'Ice', 'type_b'=>'Ground', 'sprite_url'=>'/sprites/mamoswine.png',
			'hp'=>'110', 'attack'=>'130', 'defense'=>'80', 'sp_atk'=>'70', 'sp_def'=>'60', 'speed'=>'80'),

			array('name'=>'Porygon-Z', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/porygon-z.png',
			'hp'=>'85', 'attack'=>'80', 'defense'=>'70', 'sp_atk'=>'135', 'sp_def'=>'75', 'speed'=>'90'),

			array('name'=>'Gallade', 'type_a'=>'Psychic', 'type_b'=>'Fighting', 'sprite_url'=>'/sprites/gallade.png',
			'hp'=>'68', 'attack'=>'125', 'defense'=>'65', 'sp_atk'=>'65', 'sp_def'=>'115', 'speed'=>'80'),

			array('name'=>'Probopass', 'type_a'=>'Rock', 'type_b'=>'Steel', 'sprite_url'=>'/sprites/probopass.png',
			'hp'=>'60', 'attack'=>'55', 'defense'=>'145', 'sp_atk'=>'75', 'sp_def'=>'150', 'speed'=>'40'),

			array('name'=>'Dusknoir', 'type_a'=>'Ghost', 'type_b'=>'', 'sprite_url'=>'/sprites/dusknoir.png',
			'hp'=>'45', 'attack'=>'100', 'defense'=>'135', 'sp_atk'=>'65', 'sp_def'=>'135', 'speed'=>'45'),

			array('name'=>'Froslass', 'type_a'=>'Ice', 'type_b'=>'Ghost', 'sprite_url'=>'/sprites/froslass.png',
			'hp'=>'70', 'attack'=>'80', 'defense'=>'70', 'sp_atk'=>'80', 'sp_def'=>'70', 'speed'=>'110'),

			array('name'=>'Rotom', 'type_a'=>'Electric', 'type_b'=>'Ghost', 'sprite_url'=>'/sprites/rotom.png',
			'hp'=>'50', 'attack'=>'50', 'defense'=>'77', 'sp_atk'=>'95', 'sp_def'=>'77', 'speed'=>'91'),

			array('name'=>'Uxie', 'type_a'=>'Psychic', 'type_b'=>'', 'sprite_url'=>'/sprites/uxie.png',
			'hp'=>'75', 'attack'=>'75', 'defense'=>'130', 'sp_atk'=>'75', 'sp_def'=>'130', 'speed'=>'95'),

			array('name'=>'Mesprit', 'type_a'=>'Psychic', 'type_b'=>'', 'sprite_url'=>'/sprites/mesprit.png',
			'hp'=>'80', 'attack'=>'105', 'defense'=>'105', 'sp_atk'=>'105', 'sp_def'=>'105', 'speed'=>'80'),

			array('name'=>'Azelf', 'type_a'=>'Psychic', 'type_b'=>'', 'sprite_url'=>'/sprites/azelf.png',
			'hp'=>'75', 'attack'=>'125', 'defense'=>'70', 'sp_atk'=>'125', 'sp_def'=>'70', 'speed'=>'115'),

			array('name'=>'Dialga', 'type_a'=>'Steel', 'type_b'=>'Dragon', 'sprite_url'=>'/sprites/dialga.png',
			'hp'=>'100', 'attack'=>'120', 'defense'=>'120', 'sp_atk'=>'150', 'sp_def'=>'100', 'speed'=>'90'),

			array('name'=>'Palkia', 'type_a'=>'Water', 'type_b'=>'Dragon', 'sprite_url'=>'/sprites/palkia.png',
			'hp'=>'90', 'attack'=>'120', 'defense'=>'120', 'sp_atk'=>'150', 'sp_def'=>'120', 'speed'=>'100'),

			array('name'=>'Heatran', 'type_a'=>'Fire', 'type_b'=>'Steel', 'sprite_url'=>'/sprites/heatran.png',
			'hp'=>'91', 'attack'=>'90', 'defense'=>'106', 'sp_atk'=>'130', 'sp_def'=>'106', 'speed'=>'77'),

			array('name'=>'Regigigas', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/regigigas.png',
			'hp'=>'110', 'attack'=>'160', 'defense'=>'110', 'sp_atk'=>'80', 'sp_def'=>'110', 'speed'=>'100'),

			array('name'=>'Giratina', 'type_a'=>'Ghost', 'type_b'=>'Dragon', 'sprite_url'=>'/sprites/giratina.png',
			'hp'=>'150', 'attack'=>'120', 'defense'=>'100', 'sp_atk'=>'120', 'sp_def'=>'100', 'speed'=>'90'),

			array('name'=>'Cresselia', 'type_a'=>'Psychic', 'type_b'=>'', 'sprite_url'=>'/sprites/cresselia.png',
			'hp'=>'120', 'attack'=>'70', 'defense'=>'120', 'sp_atk'=>'75', 'sp_def'=>'130', 'speed'=>'85'),

			array('name'=>'Phione', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/phione.png',
			'hp'=>'80', 'attack'=>'80', 'defense'=>'80', 'sp_atk'=>'80', 'sp_def'=>'80', 'speed'=>'80'),

			array('name'=>'Manaphy', 'type_a'=>'Water', 'type_b'=>'', 'sprite_url'=>'/sprites/manaphy.png',
			'hp'=>'100', 'attack'=>'100', 'defense'=>'100', 'sp_atk'=>'100', 'sp_def'=>'100', 'speed'=>'100'),

			array('name'=>'Darkrai', 'type_a'=>'Dark', 'type_b'=>'', 'sprite_url'=>'/sprites/darkrai.png',
			'hp'=>'70', 'attack'=>'90', 'defense'=>'90', 'sp_atk'=>'135', 'sp_def'=>'90', 'speed'=>'125'),

			array('name'=>'Shaymin', 'type_a'=>'Grass', 'type_b'=>'', 'sprite_url'=>'/sprites/shaymin.png',
			'hp'=>'100', 'attack'=>'100', 'defense'=>'100', 'sp_atk'=>'100', 'sp_def'=>'100', 'speed'=>'100'),

			array('name'=>'Arceus', 'type_a'=>'Normal', 'type_b'=>'', 'sprite_url'=>'/sprites/arceus.png',
			'hp'=>'120', 'attack'=>'120', 'defense'=>'50', 'sp_atk'=>'120', 'sp_def'=>'120', 'speed'=>'120'),

			));
	}
}