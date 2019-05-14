<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCoaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('coa', function(Blueprint $table)
		{
			$table->foreign('COAglaccttype', 'FK_coa_GLACCTTYPE')->references('GLAcctTypeID')->on('glaccttype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('COAUpdUser', 'coaACCESSID')->references('AccessID')->on('access')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('COAacct_tag', 'coaACCT_LVL')->references('AcctLevelID')->on('acctlevel')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('COAacct_type', 'coaACCT_TYPE')->references('GLAcctTypeID')->on('glaccttype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('COABALTYPE', 'coaBALTYPE')->references('BalTypeID')->on('baltype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('COABR_CODE', 'coa_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('coa', function(Blueprint $table)
		{
			$table->dropForeign('FK_coa_GLACCTTYPE');
			$table->dropForeign('coaACCESSID');
			$table->dropForeign('coaACCT_LVL');
			$table->dropForeign('coaACCT_TYPE');
			$table->dropForeign('coaBALTYPE');
			$table->dropForeign('coa_BRCODE');
		});
	}

}
