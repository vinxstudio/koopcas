<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGeoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('geo', function(Blueprint $table)
		{
			$table->foreign('GeoUpdUser', 'geoACCESSID')->references('AccessID')->on('access')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('GeoBR_CODE', 'geo_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('geo', function(Blueprint $table)
		{
			$table->dropForeign('geoACCESSID');
			$table->dropForeign('geo_BRCODE');
		});
	}

}
