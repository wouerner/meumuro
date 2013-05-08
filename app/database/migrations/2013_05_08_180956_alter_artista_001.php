<?php

use Illuminate\Database\Migrations\Migration;

class AlterArtista001 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::table('artistas', function($table)
        {
						$table->integer('user_id')->unsigned()->index();
						$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
