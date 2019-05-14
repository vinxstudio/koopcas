<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToActvtlogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('actvtlog', function(Blueprint $table)
		{
			$table->foreign('ActvtFieldID', 'FK_ActvtFieldID')->references('ID')->on('actvtfield')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ActvtListID', 'FK_ActvtList')->references('ID')->on('actvtlist')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_BR_CODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_ClientID')->references('ClientIDBrCode')->on('client')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('OvrdID', 'FK_OvrdID')->references('AccessID')->on('access')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_SLCSLT')->references('SLTypeBR_CODE')->on('sltype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('TR_CODE', 'FK_TR_CODE')->references('TransTypeID')->on('transtype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('UserID', 'FK_UserID')->references('AccessID')->on('access')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ItemID', 'FK_actvtlog_ITEMID')->references('ID')->on('inv_item')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_actvtlog_LOANAPP')->references('BR_CODE')->on('loanapp')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('VendorID', 'FK_actvtlog_VENDORID')->references('ID')->on('inv_vendor')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('actvtlog', function(Blueprint $table)
		{
			$table->dropForeign('FK_ActvtFieldID');
			$table->dropForeign('FK_ActvtList');
			$table->dropForeign('FK_BR_CODE');
			$table->dropForeign('FK_ClientID');
			$table->dropForeign('FK_OvrdID');
			$table->dropForeign('FK_SLCSLT');
			$table->dropForeign('FK_TR_CODE');
			$table->dropForeign('FK_UserID');
			$table->dropForeign('FK_actvtlog_ITEMID');
			$table->dropForeign('FK_actvtlog_LOANAPP');
			$table->dropForeign('FK_actvtlog_VENDORID');
		});
	}

}
