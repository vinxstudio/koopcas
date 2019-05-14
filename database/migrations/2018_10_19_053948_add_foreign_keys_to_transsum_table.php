<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTranssumTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('transsum', function(Blueprint $table)
		{
			$table->foreign('INVTR_CTLNO', 'transsum_INVTR_CTLNO')->references('TR_CTLNO')->on('inv_posum')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('TR_BRCODE', 'transsum_TRBRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('TR_BRCODE', 'transsum_TRCLIENTID')->references('ClientIDBrCode')->on('client')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('TR_CODE', 'transsum_TRCODE')->references('TransTypeID')->on('transtype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('TR_MODULE', 'transsum_TRMODULE')->references('TRMOD_ID')->on('tr_module')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('transsum', function(Blueprint $table)
		{
			$table->dropForeign('transsum_INVTR_CTLNO');
			$table->dropForeign('transsum_TRBRCODE');
			$table->dropForeign('transsum_TRCLIENTID');
			$table->dropForeign('transsum_TRCODE');
			$table->dropForeign('transsum_TRMODULE');
		});
	}

}
