<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInvPaymethodTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('inv_paymethod', function(Blueprint $table)
		{
			$table->foreign('BR_CODE', 'FK_inv_paymethod_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_inv_paymethod_COAID')->references('COABR_CODE')->on('coa')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_inv_paymethod_SLCT_CODE')->references('SLTypeBR_CODE')->on('sltype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('TR_CODE', 'FK_inv_paymethod_TRCODE')->references('TransTypeID')->on('transtype')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('inv_paymethod', function(Blueprint $table)
		{
			$table->dropForeign('FK_inv_paymethod_BRCODE');
			$table->dropForeign('FK_inv_paymethod_COAID');
			$table->dropForeign('FK_inv_paymethod_SLCT_CODE');
			$table->dropForeign('FK_inv_paymethod_TRCODE');
		});
	}

}
