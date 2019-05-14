<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToClstathisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('clstathis', function(Blueprint $table)
		{
			$table->foreign('BR_CODE', 'FK_clstathis_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_clstathis_CLIENTID')->references('ClientIDBrCode')->on('client')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('CLSTATID', 'FK_clstathis_CLSTAT')->references('clstatID')->on('clstat')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ENCDBY', 'FK_clstathis_ENCDBY')->references('AccessID')->on('access')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('clstathis', function(Blueprint $table)
		{
			$table->dropForeign('FK_clstathis_BRCODE');
			$table->dropForeign('FK_clstathis_CLIENTID');
			$table->dropForeign('FK_clstathis_CLSTAT');
			$table->dropForeign('FK_clstathis_ENCDBY');
		});
	}

}
