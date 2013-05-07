<?php

use Illuminate\Database\Migrations\Migration;

class CreateArtistasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
					Schema::create('artistas', function($table)
					{
					    $table->increments('id');
					    $table->string('nome',50);
		      });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
