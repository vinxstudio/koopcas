<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSemattTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sematt', function(Blueprint $table)
		{
			$table->foreign('SemAttBR_CODE', 'semattCLIENTID')->references('ClientIDBrCode')->on('client')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('SemCondIDSA', 'semattSEMCOND')->references('SemCondID')->on('semcond')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('SemAttBR_CODE', 'sematt_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sematt', function(Blueprint $table)
		{
			$table->dropForeign('semattCLIENTID');
			$table->dropForeign('semattSEMCOND');
			$table->dropForeign('sematt_BRCODE');
		});
	}

}
