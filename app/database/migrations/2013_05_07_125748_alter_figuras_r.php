<?php

use Illuminate\Database\Migrations\Migration;

class AlterFigurasR extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('figuras', function($table)
		{
		   
			 //$table->index('artista_id');
			 $table->foreign('artista_id')->references('id')->on('artistas');
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
