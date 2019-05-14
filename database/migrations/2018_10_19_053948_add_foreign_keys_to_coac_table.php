<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCoacTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('coac', function(Blueprint $table)
		{
			$table->foreign('COACUpdUser', 'coacACCESSID')->references('AccessID')->on('access')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('COACacct_tag', 'coacACCT_LVL')->references('AcctLevelID')->on('acctlevel')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('COACacct_type', 'coacACCT_TYPE')->references('GLAcctTypeID')->on('glaccttype')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('coac', function(Blueprint $table)
		{
			$table->dropForeign('coacACCESSID');
			$table->dropForeign('coacACCT_LVL');
			$table->dropForeign('coacACCT_TYPE');
		});
	}

}
