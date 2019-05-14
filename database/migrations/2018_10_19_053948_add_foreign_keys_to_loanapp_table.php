<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLoanappTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('loanapp', function(Blueprint $table)
		{
			$table->foreign('APPRVBY', 'FK_loanapp_APPRVBY')->references('AccessID')->on('access')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_loanapp_BR_CODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_loanapp_CLIENTID')->references('ClientIDBrCode')->on('client')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_loanapp_COA')->references('COABR_CODE')->on('coa')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('DEDUCGROUP', 'FK_loanapp_DEDUCGROUP')->references('LoanDeducGroupID')->on('loandeducgroup')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_loanapp_NP_SLMASTERSUM')->references('MBR_CODE')->on('slmastersum')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_loanapp_SLMASTERSUM')->references('MBR_CODE')->on('slmastersum')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('STATUSID', 'FK_loanapp_STATUSID')->references('ID')->on('loanappstatus')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_loanapp_TRANSSUM')->references('TR_BRCODE')->on('transsum')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('loanapp', function(Blueprint $table)
		{
			$table->dropForeign('FK_loanapp_APPRVBY');
			$table->dropForeign('FK_loanapp_BR_CODE');
			$table->dropForeign('FK_loanapp_CLIENTID');
			$table->dropForeign('FK_loanapp_COA');
			$table->dropForeign('FK_loanapp_DEDUCGROUP');
			$table->dropForeign('FK_loanapp_NP_SLMASTERSUM');
			$table->dropForeign('FK_loanapp_SLMASTERSUM');
			$table->dropForeign('FK_loanapp_STATUSID');
			$table->dropForeign('FK_loanapp_TRANSSUM');
		});
	}

}
