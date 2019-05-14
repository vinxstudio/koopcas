<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBankcodeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('bankcode', function(Blueprint $table)
		{
			$table->foreign('BCBR_CODE', 'BC_BR_CODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BCBR_CODE', 'BC_COAID')->references('COABR_CODE')->on('coa')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BCUPDBY', 'BC_UPDBY')->references('AccessID')->on('access')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('bankcode', function(Blueprint $table)
		{
			$table->dropForeign('BC_BR_CODE');
			$table->dropForeign('BC_COAID');
			$table->dropForeign('BC_UPDBY');
		});
	}

}
