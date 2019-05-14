<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNumdaysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('numdays', function(Blueprint $table)
		{
			$table->boolean('NumDaysID')->primary();
			$table->string('NumDaysDesc', 45);
			$table->string('NumDaysOLDID', 1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('numdays');
	}

}
