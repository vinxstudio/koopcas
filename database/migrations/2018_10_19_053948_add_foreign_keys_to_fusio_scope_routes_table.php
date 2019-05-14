<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFusioScopeRoutesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fusio_scope_routes', function(Blueprint $table)
		{
			$table->foreign('routeId', 'scopeRoutesRouteId')->references('id')->on('fusio_routes')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('scopeId', 'scopeRoutesScopeId')->references('id')->on('fusio_scope')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fusio_scope_routes', function(Blueprint $table)
		{
			$table->dropForeign('scopeRoutesRouteId');
			$table->dropForeign('scopeRoutesScopeId');
		});
	}

}
