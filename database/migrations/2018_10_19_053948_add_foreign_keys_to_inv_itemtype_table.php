<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInvItemtypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('inv_itemtype', function(Blueprint $table)
		{
			$table->foreign('BR_CODE', 'FK_inv_itemtype_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_inv_itemtype_COGSCOAID')->references('COABR_CODE')->on('coa')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_inv_itemtype_COGSSLCT_CODE')->references('SLTypeBR_CODE')->on('sltype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_inv_itemtype_CSCOAID')->references('COABR_CODE')->on('coa')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_inv_itemtype_CSRCOAID')->references('COABR_CODE')->on('coa')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_inv_itemtype_CSRSLCT_CODE')->references('SLTypeBR_CODE')->on('sltype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_inv_itemtype_CSSLCT_CODE')->references('SLTypeBR_CODE')->on('sltype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('DEPT', 'FK_inv_itemtype_DEPT')->references('DeptID')->on('dept')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_inv_itemtype_PCOAID')->references('COABR_CODE')->on('coa')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_inv_itemtype_PRCOAID')->references('COABR_CODE')->on('coa')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_inv_itemtype_PRSLCT_CODE')->references('SLTypeBR_CODE')->on('sltype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_inv_itemtype_PSLCT_CODE')->references('SLTypeBR_CODE')->on('sltype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_inv_itemtype_SCOAID')->references('COABR_CODE')->on('coa')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_inv_itemtype_SDCOAID')->references('COABR_CODE')->on('coa')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_inv_itemtype_SDSLCT_CODE')->references('SLTypeBR_CODE')->on('sltype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_inv_itemtype_SRCOAID')->references('COABR_CODE')->on('coa')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_inv_itemtype_SRSLCT_CODE')->references('SLTypeBR_CODE')->on('sltype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_inv_itemtype_SSLCT_CODE')->references('SLTypeBR_CODE')->on('sltype')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('inv_itemtype', function(Blueprint $table)
		{
			$table->dropForeign('FK_inv_itemtype_BRCODE');
			$table->dropForeign('FK_inv_itemtype_COGSCOAID');
			$table->dropForeign('FK_inv_itemtype_COGSSLCT_CODE');
			$table->dropForeign('FK_inv_itemtype_CSCOAID');
			$table->dropForeign('FK_inv_itemtype_CSRCOAID');
			$table->dropForeign('FK_inv_itemtype_CSRSLCT_CODE');
			$table->dropForeign('FK_inv_itemtype_CSSLCT_CODE');
			$table->dropForeign('FK_inv_itemtype_DEPT');
			$table->dropForeign('FK_inv_itemtype_PCOAID');
			$table->dropForeign('FK_inv_itemtype_PRCOAID');
			$table->dropForeign('FK_inv_itemtype_PRSLCT_CODE');
			$table->dropForeign('FK_inv_itemtype_PSLCT_CODE');
			$table->dropForeign('FK_inv_itemtype_SCOAID');
			$table->dropForeign('FK_inv_itemtype_SDCOAID');
			$table->dropForeign('FK_inv_itemtype_SDSLCT_CODE');
			$table->dropForeign('FK_inv_itemtype_SRCOAID');
			$table->dropForeign('FK_inv_itemtype_SRSLCT_CODE');
			$table->dropForeign('FK_inv_itemtype_SSLCT_CODE');
		});
	}

}
