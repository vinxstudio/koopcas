<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToHoldTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('hold', function(Blueprint $table)
		{
			$table->foreign('HBR_CODE', 'h_CLIENTID')->references('ClientIDBrCode')->on('client')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('HHOLD_CODE', 'h_HOLDCODE')->references('Hold_CodeID')->on('hold_code')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('HBR_CODE', 'h_SLCTREFNO')->references('MBR_CODE')->on('slmastersum')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('HBR_CODE', 'hold_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('hold', function(Blueprint $table)
		{
			$table->dropForeign('h_CLIENTID');
			$table->dropForeign('h_HOLDCODE');
			$table->dropForeign('h_SLCTREFNO');
			$table->dropForeign('hold_BRCODE');
		});
	}

}
