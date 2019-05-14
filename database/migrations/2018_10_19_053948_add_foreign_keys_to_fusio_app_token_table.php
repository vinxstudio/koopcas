<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFusioAppTokenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fusio_app_token', function(Blueprint $table)
		{
			$table->foreign('appId', 'appTokenAppId')->references('id')->on('fusio_app')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('userId', 'appTokenUserId')->references('id')->on('fusio_user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fusio_app_token', function(Blueprint $table)
		{
			$table->dropForeign('appTokenAppId');
			$table->dropForeign('appTokenUserId');
		});
	}

}
