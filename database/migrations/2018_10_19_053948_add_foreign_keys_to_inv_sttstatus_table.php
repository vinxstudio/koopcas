<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInvSttstatusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('inv_sttstatus', function(Blueprint $table)
		{
			$table->foreign('BR_CODE', 'FK_inv_sttstatus_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('inv_sttstatus', function(Blueprint $table)
		{
			$table->dropForeign('FK_inv_sttstatus_BRCODE');
		});
	}

}
