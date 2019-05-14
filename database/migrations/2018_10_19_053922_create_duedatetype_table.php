<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDuedatetypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('duedatetype', function(Blueprint $table)
		{
			$table->boolean('DueDateTypeID')->primary();
			$table->string('DueDateTypeDesc', 45);
			$table->string('DueDateTypeOLDID', 1)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('duedatetype');
	}

}
