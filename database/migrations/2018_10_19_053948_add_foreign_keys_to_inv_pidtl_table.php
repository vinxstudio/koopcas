<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInvPidtlTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('inv_pidtl', function(Blueprint $table)
		{
			$table->foreign('BR_CODE', 'FK_inv_pidtl_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ITEMID', 'FK_inv_pidtl_ITEMID')->references('ID')->on('inv_item')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_inv_pidtl_SUMMARY')->references('BR_CODE')->on('inv_pisum')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('inv_pidtl', function(Blueprint $table)
		{
			$table->dropForeign('FK_inv_pidtl_BRCODE');
			$table->dropForeign('FK_inv_pidtl_ITEMID');
			$table->dropForeign('FK_inv_pidtl_SUMMARY');
		});
	}

}
