<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInvVendorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('inv_vendor', function(Blueprint $table)
		{
			$table->foreign('BR_CODE', 'FK_inv_vendor_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_inv_vendor_CLIENTID')->references('ClientIDBrCode')->on('client')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('TERM_PERD', 'FK_inv_vendor_TERMPERD')->references('TermID')->on('term')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('inv_vendor', function(Blueprint $table)
		{
			$table->dropForeign('FK_inv_vendor_BRCODE');
			$table->dropForeign('FK_inv_vendor_CLIENTID');
			$table->dropForeign('FK_inv_vendor_TERMPERD');
		});
	}

}
