<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGeoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('geo', function(Blueprint $table)
		{
			$table->smallInteger('GeoID')->unsigned();
			$table->string('GeoDesc', 45);
			$table->smallInteger('GeoBR_CODE')->unsigned();
			$table->smallInteger('GeoUpdUser')->unsigned()->nullable()->index('FK_geo_1');
			$table->dateTime('GeoUpdDateTime')->nullable();
			$table->integer('GeoCollChartID')->unsigned()->nullable();
			$table->primary(['GeoBR_CODE','GeoID']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('geo');
	}

}
