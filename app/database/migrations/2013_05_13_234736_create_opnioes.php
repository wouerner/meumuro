<?php

use Illuminate\Database\Migrations\Migration;

class CreateOpnioes extends Migration {

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
					    $table->integer('user_id')->unsigned();
					    $table->integer('figura_id')->unsigned();
					    $table->boolean('opiniao')->nullable();
							$table->foreign('user_id')->references('id')->on('users');
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
