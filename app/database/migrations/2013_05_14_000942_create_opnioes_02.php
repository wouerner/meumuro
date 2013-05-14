<?php

use Illuminate\Database\Migrations\Migration;

class CreateOpnioes02 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
					Schema::create('opinioes', function($table)
					{
					    $table->integer('artista_id')->unsigned();
					    $table->integer('figura_id')->unsigned();
					    $table->boolean('opiniao')->nullable();
							$table->foreign('artista_id')->references('id')->on('artistas');
							$table->foreign('figura_id')->references('id')->on('figuras');
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
