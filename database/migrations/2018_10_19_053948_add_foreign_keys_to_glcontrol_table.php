<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGlcontrolTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('glcontrol', function(Blueprint $table)
		{
			$table->foreign('GLControlBR_CODE', 'glcontrolACCT_CODE')->references('COABR_CODE')->on('coa')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('GLControlCTS_NUM', 'glcontrolCTS_NUM')->references('CTS_TypeCode')->on('cts_type')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('GLControlBR_CODE', 'glcontrolSLCT_CODE')->references('SLTypeBR_CODE')->on('sltype')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('GLControlSLE_CODE', 'glcontrolSLE_CODE')->references('SLE_TypeCode')->on('sle_type')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BAL_TYPE', 'glcontrol_BALTYPE')->references('BalTypeID')->on('baltype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('GLControlBR_CODE', 'glcontrol_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('glcontrol', function(Blueprint $table)
		{
			$table->dropForeign('glcontrolACCT_CODE');
			$table->dropForeign('glcontrolCTS_NUM');
			$table->dropForeign('glcontrolSLCT_CODE');
			$table->dropForeign('glcontrolSLE_CODE');
			$table->dropForeign('glcontrol_BALTYPE');
			$table->dropForeign('glcontrol_BRCODE');
		});
	}

}
