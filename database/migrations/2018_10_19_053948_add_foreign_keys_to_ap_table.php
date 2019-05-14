<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToApTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ap', function(Blueprint $table)
		{
			$table->foreign('APBR_CODE', 'ap_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('APBR_CODE', 'ap_CLIENTID')->references('ClientIDBrCode')->on('client')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('APDD_FLAG', 'ap_DD_FLAG')->references('DueDateTypeID')->on('duedatetype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('APBR_CODE', 'ap_LSLCTREFNO')->references('MBR_CODE')->on('slmastersum')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('APPPMT_MOD2', 'ap_PPMT_MOD2')->references('TermID')->on('term')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('APPPMT_MODE', 'ap_PPMT_MODE')->references('PaymentModeID')->on('paymentmode')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('APBR_CODE', 'ap_SLCTREFNO')->references('MBR_CODE')->on('slmastersum')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('APSTATUS', 'ap_STATUS')->references('CTS_TypeCode')->on('cts_type')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('APTERM_PERD', 'ap_TERM_PERD')->references('TermID')->on('term')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('APUpdUser', 'ap_UPDUSER')->references('AccessID')->on('access')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ap', function(Blueprint $table)
		{
			$table->dropForeign('ap_BRCODE');
			$table->dropForeign('ap_CLIENTID');
			$table->dropForeign('ap_DD_FLAG');
			$table->dropForeign('ap_LSLCTREFNO');
			$table->dropForeign('ap_PPMT_MOD2');
			$table->dropForeign('ap_PPMT_MODE');
			$table->dropForeign('ap_SLCTREFNO');
			$table->dropForeign('ap_STATUS');
			$table->dropForeign('ap_TERM_PERD');
			$table->dropForeign('ap_UPDUSER');
		});
	}

}
