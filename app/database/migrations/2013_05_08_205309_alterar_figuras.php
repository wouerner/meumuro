<?php

use Illuminate\Database\Migrations\Migration;

class AlterarFiguras extends Migration {

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
						//$table->integer('categoria_id')->unsigned()->index();
						$table->foreign('categoria_id')->references('id')->on('figuras')->onDelete('cascade');
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
