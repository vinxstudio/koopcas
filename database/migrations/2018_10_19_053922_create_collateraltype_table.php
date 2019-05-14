<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCollateraltypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('collateraltype', function(Blueprint $table)
		{
			$table->boolean('CollateralTypeID')->primary();
			$table->string('CollateralTypeDesc', 45);
			$table->string('CollateralTypeOLDID', 1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('collateraltype');
	}

}
