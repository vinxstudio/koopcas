<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCisaSoletraderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cisa_soletrader', function(Blueprint $table)
		{
			$table->foreign('SoleTraderBR_CODE', 'fk_soleTraderClientID')->references('ClientIDBrCode')->on('client')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('SoleTraderMCntctType', 'fk_soleTraderContactType')->references('contactTypeCode')->on('cisa_contacttype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('SoleTraderMIDtype', 'fk_soleTraderIDtype')->references('idTypeCode')->on('cisa_primaryid')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cisa_soletrader', function(Blueprint $table)
		{
			$table->dropForeign('fk_soleTraderClientID');
			$table->dropForeign('fk_soleTraderContactType');
			$table->dropForeign('fk_soleTraderIDtype');
		});
	}

}
