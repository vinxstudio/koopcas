<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToScTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sc', function(Blueprint $table)
		{
			$table->foreign('SCBR_CODE', 'sc_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('SCBR_CODE', 'sc_CLIENTID')->references('ClientIDBrCode')->on('client')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('SCBR_CODE', 'sc_SLCT_CODE')->references('MBR_CODE')->on('slmastersum')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('SCSTATUS', 'sc_STATUS')->references('CTS_TypeCode')->on('cts_type')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('SCUpdUser', 'sc_UPDUSER')->references('AccessID')->on('access')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sc', function(Blueprint $table)
		{
			$table->dropForeign('sc_BRCODE');
			$table->dropForeign('sc_CLIENTID');
			$table->dropForeign('sc_SLCT_CODE');
			$table->dropForeign('sc_STATUS');
			$table->dropForeign('sc_UPDUSER');
		});
	}

}
