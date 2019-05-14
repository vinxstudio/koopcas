<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFusioRateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fusio_rate', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('status');
			$table->integer('priority');
			$table->string('name', 64);
			$table->integer('rateLimit');
			$table->string('timespan');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fusio_rate');
	}

}
