<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGeoSubgroupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('geo_subgroup', function(Blueprint $table)
		{
			$table->integer('Geo_SubgroupID', true);
			$table->string('Geo_SubgroupDesc', 200);
			$table->smallInteger('GeoID');
			$table->smallInteger('Geo_SubgroupBR_CODE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('geo_subgroup');
	}

}
