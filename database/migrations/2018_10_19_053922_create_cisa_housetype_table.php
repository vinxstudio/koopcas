<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCisaHousetypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cisa_housetype', function(Blueprint $table)
		{
			$table->boolean('HouseTypeID')->primary();
			$table->string('HouseTypeDesc', 50)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cisa_housetype');
	}

}
