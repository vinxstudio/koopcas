<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCisaCountryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cisa_country', function(Blueprint $table)
		{
			$table->boolean('CountryID')->default(0)->primary();
			$table->string('CountryDesc', 100)->default('');
			$table->string('countryCode', 10)->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cisa_country');
	}

}
