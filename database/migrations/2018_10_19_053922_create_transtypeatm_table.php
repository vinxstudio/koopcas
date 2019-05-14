<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTranstypeatmTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transtypeatm', function(Blueprint $table)
		{
			$table->boolean('ID')->primary();
			$table->string('DESC1', 20);
			$table->string('DESC2', 100);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('transtypeatm');
	}

}
