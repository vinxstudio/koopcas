<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTdTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('td', function(Blueprint $table)
		{
			$table->foreign('TDBR_CODE', 'FK_td_ROSLCT_CODE')->references('SLTypeBR_CODE')->on('sltype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('TDBR_CODE', 'FK_td_TDRO_ACCTCODE')->references('COABR_CODE')->on('coa')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('TDBR_CODE', 'td_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('TDBR_CODE', 'td_CLIENTID')->references('ClientIDBrCode')->on('client')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('TDBR_CODE', 'td_SLCT_CODE')->references('MBR_CODE')->on('slmastersum')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('TDSTATUS', 'td_STATUS')->references('CTS_TypeCode')->on('cts_type')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('TDTERM_PERD', 'td_TERM_PERD')->references('TermID')->on('term')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('TDUpdUser', 'td_UPDUSER')->references('AccessID')->on('access')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('td', function(Blueprint $table)
		{
			$table->dropForeign('FK_td_ROSLCT_CODE');
			$table->dropForeign('FK_td_TDRO_ACCTCODE');
			$table->dropForeign('td_BRCODE');
			$table->dropForeign('td_CLIENTID');
			$table->dropForeign('td_SLCT_CODE');
			$table->dropForeign('td_STATUS');
			$table->dropForeign('td_TERM_PERD');
			$table->dropForeign('td_UPDUSER');
		});
	}

}
