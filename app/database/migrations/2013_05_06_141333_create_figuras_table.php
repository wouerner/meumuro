<?php

use Illuminate\Database\Migrations\Migration;

class CreateFigurasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
					Schema::create('figuras', function($table)
					{
					    $table->increments('id');
					    $table->string('nome',50);
					    $table->string('url',256);
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
