<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateScStocksHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sc_stocks_history', function(Blueprint $table)
		{
			$table->smallInteger('SC_HISbrcode')->unsigned();
			$table->boolean('SC_HISslc_code');
			$table->boolean('SC_HISslt_code');
			$table->integer('SC_HISref_no')->unsigned();
			$table->integer('SC_HISclient_ID')->unsigned();
			$table->date('SC_HIStr_date');
			$table->dateTime('SC_HISpc_date');
			$table->string('SC_HIScert_no', 20)->nullable();
			$table->decimal('SC_HISno_shares', 15);
			$table->decimal('SC_HISsubscribe_amt', 15);
			$table->decimal('SC_HISsc_amt', 15);
			$table->primary(['SC_HISbrcode','SC_HISslc_code','SC_HISslt_code','SC_HISref_no','SC_HISclient_ID','SC_HIStr_date','SC_HISpc_date']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sc_stocks_history');
	}

}
