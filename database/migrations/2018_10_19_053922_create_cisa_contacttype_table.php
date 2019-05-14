<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCisaContacttypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cisa_contacttype', function(Blueprint $table)
		{
			$table->boolean('contactTypeCode')->default(0)->primary();
			$table->string('contactDescription', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cisa_contacttype');
	}

}
