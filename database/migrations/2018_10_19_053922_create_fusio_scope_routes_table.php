<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFusioScopeRoutesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fusio_scope_routes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('scopeId')->index('IDX_ACCB7E1F9BA970FA');
			$table->integer('routeId')->index('IDX_ACCB7E1FEF2EA341');
			$table->smallInteger('allow');
			$table->string('methods', 64)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fusio_scope_routes');
	}

}
