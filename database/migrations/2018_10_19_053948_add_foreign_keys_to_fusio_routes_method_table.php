<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFusioRoutesMethodTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fusio_routes_method', function(Blueprint $table)
		{
			$table->foreign('action', 'routesMethodAction')->references('id')->on('fusio_action')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('parameters', 'routesMethodParameters')->references('id')->on('fusio_schema')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('request', 'routesMethodRequest')->references('id')->on('fusio_schema')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('routeId', 'routesMethodRouteId')->references('id')->on('fusio_routes')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fusio_routes_method', function(Blueprint $table)
		{
			$table->dropForeign('routesMethodAction');
			$table->dropForeign('routesMethodParameters');
			$table->dropForeign('routesMethodRequest');
			$table->dropForeign('routesMethodRouteId');
		});
	}

}
