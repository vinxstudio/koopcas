<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFusioAppScopeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fusio_app_scope', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('appId')->index('IDX_D0587A8636DA3021');
			$table->integer('scopeId')->index('IDX_D0587A869BA970FA');
			$table->unique(['appId','scopeId'], 'UNIQ_D0587A8636DA30219BA970FA');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fusio_app_scope');
	}

}
