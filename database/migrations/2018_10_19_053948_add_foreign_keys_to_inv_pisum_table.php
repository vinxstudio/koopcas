<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInvPisumTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('inv_pisum', function(Blueprint $table)
		{
			$table->foreign('BR_CODE', 'FK_inv_pisum_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ENCDBY', 'FK_inv_pisum_ENCDBY')->references('AccessID')->on('access')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('LOCATIONID', 'FK_inv_pisum_LOCATIONID')->references('ID')->on('inv_location')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('StatusID', 'FK_inv_pisum_STATUS')->references('ID')->on('inv_pistatus')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('inv_pisum', function(Blueprint $table)
		{
			$table->dropForeign('FK_inv_pisum_BRCODE');
			$table->dropForeign('FK_inv_pisum_ENCDBY');
			$table->dropForeign('FK_inv_pisum_LOCATIONID');
			$table->dropForeign('FK_inv_pisum_STATUS');
		});
	}

}
