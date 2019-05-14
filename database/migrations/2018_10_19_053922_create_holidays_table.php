<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHolidaysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('holidays', function(Blueprint $table)
		{
			$table->smallInteger('BR_CODE')->unsigned();
			$table->date('TR_DATE');
			$table->string('DESC1', 45);
			$table->text('REMARKS', 65535)->nullable();
			$table->primary(['BR_CODE','TR_DATE']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('holidays');
	}

}
