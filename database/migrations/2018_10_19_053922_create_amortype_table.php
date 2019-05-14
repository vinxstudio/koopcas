<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAmortypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('amortype', function(Blueprint $table)
		{
			$table->boolean('AmorTypeID')->primary();
			$table->string('AmorTypeDesc', 45);
			$table->string('AmorTypeOLDID', 1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('amortype');
	}

}
