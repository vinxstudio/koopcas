<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSdTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sd', function(Blueprint $table)
		{
			$table->foreign('SDBR_CODE', 'sd_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('SDBR_CODE', 'sd_CLIENTID')->references('ClientIDBrCode')->on('client')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('SDBR_CODE', 'sd_SLCT_CODE')->references('MBR_CODE')->on('slmastersum')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('SDSTATUS', 'sd_STATUS')->references('CTS_TypeCode')->on('cts_type')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('SDUpdUser', 'sd_UPDUSER')->references('AccessID')->on('access')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sd', function(Blueprint $table)
		{
			$table->dropForeign('sd_BRCODE');
			$table->dropForeign('sd_CLIENTID');
			$table->dropForeign('sd_SLCT_CODE');
			$table->dropForeign('sd_STATUS');
			$table->dropForeign('sd_UPDUSER');
		});
	}

}
