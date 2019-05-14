<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRequestTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('request', function(Blueprint $table)
		{
			$table->foreign('BR_CODE', 'FK_request_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_request_CLIENTID')->references('ClientIDBrCode')->on('client')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('REQ_CODE', 'FK_request_REQCODE')->references('ID')->on('reqcode')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('REQ_STATUS', 'FK_request_REQSTATUS')->references('ID')->on('reqstatus')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('SLE_CODE', 'FK_request_SLE')->references('SLE_TypeCode')->on('sle_type')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_request_SLTYPE')->references('SLTypeBR_CODE')->on('sltype')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('request', function(Blueprint $table)
		{
			$table->dropForeign('FK_request_BRCODE');
			$table->dropForeign('FK_request_CLIENTID');
			$table->dropForeign('FK_request_REQCODE');
			$table->dropForeign('FK_request_REQSTATUS');
			$table->dropForeign('FK_request_SLE');
			$table->dropForeign('FK_request_SLTYPE');
		});
	}

}
