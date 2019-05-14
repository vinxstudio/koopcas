<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCisaSecondaryidTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cisa_secondaryid', function(Blueprint $table)
		{
			$table->boolean('idTypeCode')->primary();
			$table->string('idTypeDesc', 100)->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cisa_secondaryid');
	}

}
