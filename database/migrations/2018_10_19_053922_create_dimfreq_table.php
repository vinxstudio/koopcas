<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDimfreqTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dimfreq', function(Blueprint $table)
		{
			$table->boolean('DimFreqID')->primary();
			$table->string('DimFreqDesc', 45);
			$table->string('DimFreqOLDID', 1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dimfreq');
	}

}
