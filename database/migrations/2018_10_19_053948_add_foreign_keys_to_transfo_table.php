<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTransfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('transfo', function(Blueprint $table)
		{
			$table->foreign('FOTR_BRCODE', 'transfo_ACCT_CODE')->references('COABR_CODE')->on('coa')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('FOADJ_FLAG', 'transfo_ADJFLAG')->references('ADJFLAGID')->on('adjflag')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('FOAPPRVBY', 'transfo_APPRBY')->references('AccessID')->on('access')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('FOTR_BRCODE', 'transfo_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('FOTR_BRCODE', 'transfo_CLIENTID')->references('ClientIDBrCode')->on('client')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('FOCOCI_TYPE', 'transfo_COCITYPE')->references('COCITYPEID')->on('cocitype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('FOCTS_NUM', 'transfo_CTS_NUM')->references('CTS_TypeCode')->on('cts_type')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('FOENCDBY', 'transfo_ENCDBY')->references('AccessID')->on('access')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('FOPOSTBY', 'transfo_POSTBY')->references('AccessID')->on('access')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('FOTR_BRCODE', 'transfo_SLCTREFNOCLIENTID')->references('MBR_CODE')->on('slmastersum')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('FOSLE_CODE', 'transfo_SLE_CODE')->references('SLE_TypeCode')->on('sle_type')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('FOTR_BRCODE', 'transfo_SL_CTECTS')->references('GLControlBR_CODE')->on('glcontrol')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('FOUPD_TAG', 'transfo_UPDTAG')->references('UPDTAGID')->on('updtag')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('FOTR_BRCODE', 'transfo_YRMODCODECTLNO')->references('TR_BRCODE')->on('transsum')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('transfo', function(Blueprint $table)
		{
			$table->dropForeign('transfo_ACCT_CODE');
			$table->dropForeign('transfo_ADJFLAG');
			$table->dropForeign('transfo_APPRBY');
			$table->dropForeign('transfo_BRCODE');
			$table->dropForeign('transfo_CLIENTID');
			$table->dropForeign('transfo_COCITYPE');
			$table->dropForeign('transfo_CTS_NUM');
			$table->dropForeign('transfo_ENCDBY');
			$table->dropForeign('transfo_POSTBY');
			$table->dropForeign('transfo_SLCTREFNOCLIENTID');
			$table->dropForeign('transfo_SLE_CODE');
			$table->dropForeign('transfo_SL_CTECTS');
			$table->dropForeign('transfo_UPDTAG');
			$table->dropForeign('transfo_YRMODCODECTLNO');
		});
	}

}
