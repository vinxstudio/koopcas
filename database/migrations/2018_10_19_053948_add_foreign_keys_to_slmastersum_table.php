<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSlmastersumTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('slmastersum', function(Blueprint $table)
		{
			$table->foreign('MBR_CODE', 'm_SLCT_CODE')->references('SLTypeBR_CODE')->on('sltype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('MBR_CODE', 'slmastersum_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('MBR_CODE', 'slmastersum_CLIENTID')->references('ClientIDBrCode')->on('client')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('slmastersum', function(Blueprint $table)
		{
			$table->dropForeign('m_SLCT_CODE');
			$table->dropForeign('slmastersum_BRCODE');
			$table->dropForeign('slmastersum_CLIENTID');
		});
	}

}
