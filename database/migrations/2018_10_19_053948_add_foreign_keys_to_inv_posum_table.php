<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInvPosumTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('inv_posum', function(Blueprint $table)
		{
			$table->foreign('BR_CODE', 'FK_inv_posum_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ENCDBY', 'FK_inv_posum_ENCDBY')->references('AccessID')->on('access')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('StatusID', 'FK_inv_posum_STATUS')->references('ID')->on('inv_postatus')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('VendorID', 'FK_inv_posum_VENDORID')->references('ID')->on('inv_vendor')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('inv_posum', function(Blueprint $table)
		{
			$table->dropForeign('FK_inv_posum_BRCODE');
			$table->dropForeign('FK_inv_posum_ENCDBY');
			$table->dropForeign('FK_inv_posum_STATUS');
			$table->dropForeign('FK_inv_posum_VENDORID');
		});
	}

}
