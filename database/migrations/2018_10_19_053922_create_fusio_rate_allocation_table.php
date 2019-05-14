<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFusioRateAllocationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fusio_rate_allocation', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('rateId')->index('IDX_26E07532925F3C99');
			$table->integer('routeId')->nullable()->index('IDX_26E07532EF2EA341');
			$table->integer('appId')->nullable()->index('IDX_26E0753236DA3021');
			$table->integer('authenticated')->nullable();
			$table->string('parameters')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fusio_rate_allocation');
	}

}
