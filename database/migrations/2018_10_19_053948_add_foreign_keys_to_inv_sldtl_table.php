<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInvSldtlTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('inv_sldtl', function(Blueprint $table)
		{
			$table->foreign('ADJREASON', 'FK_inv_sldtl_ADJREASON')->references('ID')->on('inv_adjreason')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_inv_sldtl_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_inv_sldtl_CLIENTID')->references('ClientIDBrCode')->on('client')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ITEMID', 'FK_inv_sldtl_ITEMID')->references('ID')->on('inv_item')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('LOCATION', 'FK_inv_sldtl_LOCATION')->references('ID')->on('inv_location')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('PAYMETHOD', 'FK_inv_sldtl_PAYMETHOD')->references('ID')->on('inv_paymethod')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('TR_CODE', 'FK_inv_sldtl_TRCODE')->references('TransTypeID')->on('transtype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('UPDTAG', 'FK_inv_sldtl_UPDTAG')->references('UPDTAGID')->on('updtag')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('inv_sldtl', function(Blueprint $table)
		{
			$table->dropForeign('FK_inv_sldtl_ADJREASON');
			$table->dropForeign('FK_inv_sldtl_BRCODE');
			$table->dropForeign('FK_inv_sldtl_CLIENTID');
			$table->dropForeign('FK_inv_sldtl_ITEMID');
			$table->dropForeign('FK_inv_sldtl_LOCATION');
			$table->dropForeign('FK_inv_sldtl_PAYMETHOD');
			$table->dropForeign('FK_inv_sldtl_TRCODE');
			$table->dropForeign('FK_inv_sldtl_UPDTAG');
		});
	}

}
