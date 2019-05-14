<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLoandeducTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('loandeduc', function(Blueprint $table)
		{
			$table->foreign('BR_CODE', 'FK_loandeduc_CLIENTID1')->references('ClientIDBrCode')->on('client')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_loandeduc_COA1')->references('COABR_CODE')->on('coa')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('SLBEHAVIOR', 'FK_loandeduc_SLBEHAVIOR')->references('ID')->on('loanslbehavior')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_loandeduc_SLTYPE1')->references('SLTypeBR_CODE')->on('sltype')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('loandeduc', function(Blueprint $table)
		{
			$table->dropForeign('FK_loandeduc_CLIENTID1');
			$table->dropForeign('FK_loandeduc_COA1');
			$table->dropForeign('FK_loandeduc_SLBEHAVIOR');
			$table->dropForeign('FK_loandeduc_SLTYPE1');
		});
	}

}
