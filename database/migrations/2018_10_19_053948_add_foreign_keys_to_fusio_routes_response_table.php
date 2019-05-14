<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFusioRoutesResponseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fusio_routes_response', function(Blueprint $table)
		{
			$table->foreign('methodId', 'routesResponseMethodId')->references('id')->on('fusio_routes_method')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('response', 'routesResponseResponse')->references('id')->on('fusio_schema')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fusio_routes_response', function(Blueprint $table)
		{
			$table->dropForeign('routesResponseMethodId');
			$table->dropForeign('routesResponseResponse');
		});
	}

}
