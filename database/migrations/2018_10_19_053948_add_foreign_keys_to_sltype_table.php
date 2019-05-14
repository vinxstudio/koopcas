<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSltypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sltype', function(Blueprint $table)
		{
			$table->foreign('SLTypeCISA_SL', 'FK_SLType_CISA_SL')->references('CISA_SLTypeID')->on('cisa_sltype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('SLTypeCluster', 'FK_SLType_CLUSTER')->references('ClusterID')->on('cluster')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('SLTypeAMORTYPE', 'sltypeAMORTYPE')->references('AmorTypeID')->on('amortype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('SLTypeDD_FLAG', 'sltypeDD_FLAG')->references('DueDateTypeID')->on('duedatetype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('SLTypeDIMB_FREQ', 'sltypeDIMB_FREQ')->references('DimFreqID')->on('dimfreq')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('SLTypeDORM_PERD', 'sltypeDORM_PERD')->references('TermID')->on('term')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('SLTypeIPMT_MODE', 'sltypeIPMT_MODE')->references('PaymentModeID')->on('paymentmode')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('SLTypePBTYPE', 'sltypePBTYPE')->references('PassBkTypeID')->on('passbktype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('SLTypePEN_MODE', 'sltypePEN_MODE')->references('PaymentModeID')->on('paymentmode')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('SLTypePPMT_MODE', 'sltypePPMT_MODE')->references('PaymentModeID')->on('paymentmode')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('SLTypeSLC_CODE', 'sltypeSLC_CODE')->references('SLClassID')->on('slclass')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('SLTypeTERM_PERD', 'sltypeTERM_PERD')->references('TermID')->on('term')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('SLTypeUpdUser', 'sltypeUpdUser')->references('AccessID')->on('access')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('SLTypeBR_CODE', 'sltype_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sltype', function(Blueprint $table)
		{
			$table->dropForeign('FK_SLType_CISA_SL');
			$table->dropForeign('FK_SLType_CLUSTER');
			$table->dropForeign('sltypeAMORTYPE');
			$table->dropForeign('sltypeDD_FLAG');
			$table->dropForeign('sltypeDIMB_FREQ');
			$table->dropForeign('sltypeDORM_PERD');
			$table->dropForeign('sltypeIPMT_MODE');
			$table->dropForeign('sltypePBTYPE');
			$table->dropForeign('sltypePEN_MODE');
			$table->dropForeign('sltypePPMT_MODE');
			$table->dropForeign('sltypeSLC_CODE');
			$table->dropForeign('sltypeTERM_PERD');
			$table->dropForeign('sltypeUpdUser');
			$table->dropForeign('sltype_BRCODE');
		});
	}

}
