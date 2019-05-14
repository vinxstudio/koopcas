<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFusioAppScopeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fusio_app_scope', function(Blueprint $table)
		{
			$table->foreign('appId', 'appScopeAppId')->references('id')->on('fusio_app')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('scopeId', 'appScopeScopeId')->references('id')->on('fusio_scope')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fusio_app_scope', function(Blueprint $table)
		{
			$table->dropForeign('appScopeAppId');
			$table->dropForeign('appScopeScopeId');
		});
	}

}
