<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFusioUserScopeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fusio_user_scope', function(Blueprint $table)
		{
			$table->foreign('scopeId', 'userScopeScopeId')->references('id')->on('fusio_scope')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('userId', 'userScopeUserId')->references('id')->on('fusio_user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fusio_user_scope', function(Blueprint $table)
		{
			$table->dropForeign('userScopeScopeId');
			$table->dropForeign('userScopeUserId');
		});
	}

}
