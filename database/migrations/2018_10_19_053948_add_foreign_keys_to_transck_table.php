<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTransckTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('transck', function(Blueprint $table)
		{
			$table->foreign('CKAPPRVBY', 'transck_APPRBY')->references('AccessID')->on('access')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('CKTR_BRCODE', 'transck_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('CKCHECKTYPE', 'transck_CHECKTYPE')->references('ChkTypeID')->on('chktype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('CKCOCI_TYPE', 'transck_COCITYPE')->references('COCITYPEID')->on('cocitype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('CKENCDBY', 'transck_ENCDBY')->references('AccessID')->on('access')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('CKPOSTBY', 'transck_POSTBY')->references('AccessID')->on('access')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('CKUPD_TAG', 'transck_UPDTAG')->references('UPDTAGID')->on('updtag')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('CKTR_BRCODE', 'transck_YRMODCODECTLNO')->references('TR_BRCODE')->on('transsum')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('transck', function(Blueprint $table)
		{
			$table->dropForeign('transck_APPRBY');
			$table->dropForeign('transck_BRCODE');
			$table->dropForeign('transck_CHECKTYPE');
			$table->dropForeign('transck_COCITYPE');
			$table->dropForeign('transck_ENCDBY');
			$table->dropForeign('transck_POSTBY');
			$table->dropForeign('transck_UPDTAG');
			$table->dropForeign('transck_YRMODCODECTLNO');
		});
	}

}
