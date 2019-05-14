<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBalancesheetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('balancesheet', function(Blueprint $table)
		{
			$table->string('COAIDx', 10);
			$table->string('COADESCx', 100)->nullable();
			$table->string('COAACCT_SUMx', 10)->nullable();
			$table->string('SUMMARYx', 80)->nullable();
			$table->string('GROUP1x', 80)->nullable();
			$table->string('GROUP2x', 80)->nullable();
			$table->string('GROUP3x', 80)->nullable();
			$table->string('GROUP4x', 80)->nullable();
			$table->string('GROUP5x', 80)->nullable();
			$table->string('GROUP6x', 80)->nullable();
			$table->decimal('THISMONTHx', 13)->nullable();
			$table->decimal('LASTMONTHx', 13)->nullable();
			$table->decimal('TM_LM_VARIANCEx', 13)->nullable();
			$table->decimal('MTD_AVG_DAILYBALANCEx', 13)->nullable();
			$table->decimal('YTD_AVG_DAILYBALANCEx', 13)->nullable();
			$table->decimal('BUDGETx', 13)->nullable();
			$table->decimal('TM_BUDGET_VARIANCEx', 13)->nullable();
			$table->decimal('SAMEMONTH_LASTYEARx', 13)->nullable();
			$table->decimal('YEAREND_LASTYEARx', 13)->nullable();
			$table->decimal('TM_YELY_VARIANCEx', 13)->nullable();
			$table->decimal('TM_YELEY_PERCENT_VARIANCEx', 13)->nullable();
			$table->decimal('YTD_ACTUAL_THISMONTHx', 13)->nullable();
			$table->string('BR_CODEx', 80)->default('');
			$table->decimal('SEQNO', 15, 3)->nullable();
			$table->primary(['BR_CODEx','COAIDx']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('balancesheet');
	}

}
