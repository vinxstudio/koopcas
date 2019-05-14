<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOslTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('osl', function(Blueprint $table)
		{
			$table->foreign('OSLBR_CODE', 'osl_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('OSLBR_CODE', 'osl_CLIENTID')->references('ClientIDBrCode')->on('client')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('OSLBR_CODE', 'osl_SLCT_CODE')->references('MBR_CODE')->on('slmastersum')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('OSLSTATUS', 'osl_STATUS')->references('CTS_TypeCode')->on('cts_type')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('OSLUpdUser', 'osl_UPDUSER')->references('AccessID')->on('access')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('osl', function(Blueprint $table)
		{
			$table->dropForeign('osl_BRCODE');
			$table->dropForeign('osl_CLIENTID');
			$table->dropForeign('osl_SLCT_CODE');
			$table->dropForeign('osl_STATUS');
			$table->dropForeign('osl_UPDUSER');
		});
	}

}
