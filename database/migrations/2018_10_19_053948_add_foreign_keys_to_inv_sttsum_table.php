<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInvSttsumTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('inv_sttsum', function(Blueprint $table)
		{
			$table->foreign('BR_CODE', 'FK_inv_sttsum_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ENCDBY', 'FK_inv_sttsum_ENCDBY')->references('AccessID')->on('access')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_inv_sttsum_FROMLOC')->references('BR_CODE')->on('inv_location')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('StatusID', 'FK_inv_sttsum_STATUS')->references('ID')->on('inv_sttstatus')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_inv_sttsum_TOLOC')->references('BR_CODE')->on('inv_location')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('inv_sttsum', function(Blueprint $table)
		{
			$table->dropForeign('FK_inv_sttsum_BRCODE');
			$table->dropForeign('FK_inv_sttsum_ENCDBY');
			$table->dropForeign('FK_inv_sttsum_FROMLOC');
			$table->dropForeign('FK_inv_sttsum_STATUS');
			$table->dropForeign('FK_inv_sttsum_TOLOC');
		});
	}

}
