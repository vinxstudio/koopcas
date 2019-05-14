<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToScStocksHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sc_stocks_history', function(Blueprint $table)
		{
			$table->foreign('SC_HISbrcode', 'FK_SC_HISTORY')->references('SL_BRCODE')->on('slsum')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sc_stocks_history', function(Blueprint $table)
		{
			$table->dropForeign('FK_SC_HISTORY');
		});
	}

}
