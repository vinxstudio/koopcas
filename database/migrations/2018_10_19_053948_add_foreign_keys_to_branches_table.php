<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBranchesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('branches', function(Blueprint $table)
		{
			$table->foreign('BranchesID', 'FK_branches_REBEXPACCT')->references('COABR_CODE')->on('coa')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BranchesID', 'FK_branches_REBSLCT')->references('SLTypeBR_CODE')->on('sltype')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('branches', function(Blueprint $table)
		{
			$table->dropForeign('FK_branches_REBEXPACCT');
			$table->dropForeign('FK_branches_REBSLCT');
		});
	}

}
