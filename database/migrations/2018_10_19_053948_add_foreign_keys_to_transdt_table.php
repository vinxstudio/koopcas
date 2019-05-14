<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTransdtTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('transdt', function(Blueprint $table)
		{
			$table->foreign('DTTR_BRCODE', 'transdt_ACCT_CODE')->references('COABR_CODE')->on('coa')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('DTADJ_FLAG', 'transdt_ADJFLAG')->references('ADJFLAGID')->on('adjflag')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('DTAPPRVBY', 'transdt_APPRBY')->references('AccessID')->on('access')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('DTTR_BRCODE', 'transdt_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('DTTR_BRCODE', 'transdt_CLIENTID')->references('ClientIDBrCode')->on('client')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('DTCOCI_TYPE', 'transdt_COCITYPE')->references('COCITYPEID')->on('cocitype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('DTCTS_NUM', 'transdt_CTS_NUM')->references('CTS_TypeCode')->on('cts_type')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('DTDEPT', 'transdt_DEPT')->references('DeptID')->on('dept')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('DTENCDBY', 'transdt_ENCDBY')->references('AccessID')->on('access')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('DTPOSTBY', 'transdt_POSTBY')->references('AccessID')->on('access')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('DTTR_BRCODE', 'transdt_SLCTREFNOCLIENTID')->references('MBR_CODE')->on('slmastersum')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('DTSLE_CODE', 'transdt_SLE_CODE')->references('SLE_TypeCode')->on('sle_type')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('DTTR_BRCODE', 'transdt_SL_CTECTS')->references('GLControlBR_CODE')->on('glcontrol')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('DTUPD_TAG', 'transdt_UPDTAG')->references('UPDTAGID')->on('updtag')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('DTTR_BRCODE', 'transdt_YRMODCODECTLNO')->references('TR_BRCODE')->on('transsum')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('transdt', function(Blueprint $table)
		{
			$table->dropForeign('transdt_ACCT_CODE');
			$table->dropForeign('transdt_ADJFLAG');
			$table->dropForeign('transdt_APPRBY');
			$table->dropForeign('transdt_BRCODE');
			$table->dropForeign('transdt_CLIENTID');
			$table->dropForeign('transdt_COCITYPE');
			$table->dropForeign('transdt_CTS_NUM');
			$table->dropForeign('transdt_DEPT');
			$table->dropForeign('transdt_ENCDBY');
			$table->dropForeign('transdt_POSTBY');
			$table->dropForeign('transdt_SLCTREFNOCLIENTID');
			$table->dropForeign('transdt_SLE_CODE');
			$table->dropForeign('transdt_SL_CTECTS');
			$table->dropForeign('transdt_UPDTAG');
			$table->dropForeign('transdt_YRMODCODECTLNO');
		});
	}

}
