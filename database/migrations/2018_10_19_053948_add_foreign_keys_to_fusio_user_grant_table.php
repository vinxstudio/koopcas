<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFusioUserGrantTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fusio_user_grant', function(Blueprint $table)
		{
			$table->foreign('appId', 'userGrantAppId')->references('id')->on('fusio_app')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('userId', 'userGrantUserId')->references('id')->on('fusio_user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fusio_user_grant', function(Blueprint $table)
		{
			$table->dropForeign('userGrantAppId');
			$table->dropForeign('userGrantUserId');
		});
	}

}
