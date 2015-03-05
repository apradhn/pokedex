<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePokemonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pokemon', function($table) {
			
			$table->increments('id');
			$table->timestamps();

			$table->string('name');
			$table->string('type_a');
			$table->string('type_b');
			$table->string('sprite_url');
			$table->integer('hp');
			$table->integer('attack');
			$table->integer('defense');
			$table->integer('sp_atk');
			$table->integer('sp_def');
			$table->integer('speed');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pokemon');
	}

}
