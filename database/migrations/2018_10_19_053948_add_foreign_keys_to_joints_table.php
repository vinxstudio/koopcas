<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToJointsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('joints', function(Blueprint $table)
		{
			$table->foreign('JointsBR_CODE', 'jointsCLIENTID')->references('ClientIDBrCode')->on('client')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('JointsBR_CODE', 'joints_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('joints', function(Blueprint $table)
		{
			$table->dropForeign('jointsCLIENTID');
			$table->dropForeign('joints_BRCODE');
		});
	}

}
