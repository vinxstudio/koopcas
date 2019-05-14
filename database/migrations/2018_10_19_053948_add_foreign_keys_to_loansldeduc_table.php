<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLoansldeducTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('loansldeduc', function(Blueprint $table)
		{
			$table->foreign('BR_CODE', 'FK_loansldeduc_CLIENTID')->references('ClientIDBrCode')->on('client')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_loansldeduc_COA')->references('COABR_CODE')->on('coa')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('CODEID', 'FK_loansldeduc_CODESTORAGE')->references('ID')->on('codestorage')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('DEDUCGROUP', 'FK_loansldeduc_DEDUCGROUP')->references('LoanDeducGroupID')->on('loandeducgroup')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_loansldeduc_GLCONTROL')->references('GLControlBR_CODE')->on('glcontrol')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('SLBEHAVIOR', 'FK_loansldeduc_SLBEHAVIOR')->references('ID')->on('loanslbehavior')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_loansldeduc_SLTYPE')->references('SLTypeBR_CODE')->on('sltype')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('loansldeduc', function(Blueprint $table)
		{
			$table->dropForeign('FK_loansldeduc_CLIENTID');
			$table->dropForeign('FK_loansldeduc_COA');
			$table->dropForeign('FK_loansldeduc_CODESTORAGE');
			$table->dropForeign('FK_loansldeduc_DEDUCGROUP');
			$table->dropForeign('FK_loansldeduc_GLCONTROL');
			$table->dropForeign('FK_loansldeduc_SLBEHAVIOR');
			$table->dropForeign('FK_loansldeduc_SLTYPE');
		});
	}

}
