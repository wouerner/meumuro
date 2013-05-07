<?php

use Illuminate\Database\Migrations\Migration;

class AlterFigura01sTable extends Migration {

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
    $table->dropColumn('email');
		$table->binary('image');
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
