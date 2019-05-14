<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFusioRateAllocationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fusio_rate_allocation', function(Blueprint $table)
		{
			$table->foreign('appId', 'rateAllocationAppId')->references('id')->on('fusio_app')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('rateId', 'rateAllocationRateId')->references('id')->on('fusio_rate')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('routeId', 'rateAllocationRouteId')->references('id')->on('fusio_routes')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fusio_rate_allocation', function(Blueprint $table)
		{
			$table->dropForeign('rateAllocationAppId');
			$table->dropForeign('rateAllocationRateId');
			$table->dropForeign('rateAllocationRouteId');
		});
	}

}
