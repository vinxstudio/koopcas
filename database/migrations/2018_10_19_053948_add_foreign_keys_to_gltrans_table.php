<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGltransTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('gltrans', function(Blueprint $table)
		{
			$table->foreign('GLTransDEPT', 'FK_gltrans_DEPT')->references('DeptID')->on('dept')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('GLTransBR_CODE', 'gltrans_ACCT_CODE')->references('COABR_CODE')->on('coa')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('GLTransBR_CODE', 'gltrans_BR_CODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('GLTransTR_CODE', 'gltrans_TR_CODE')->references('TransTypeID')->on('transtype')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('gltrans', function(Blueprint $table)
		{
			$table->dropForeign('FK_gltrans_DEPT');
			$table->dropForeign('gltrans_ACCT_CODE');
			$table->dropForeign('gltrans_BR_CODE');
			$table->dropForeign('gltrans_TR_CODE');
		});
	}

}
