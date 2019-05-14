<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCisaPsiccodeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cisa_psiccode', function(Blueprint $table)
		{
			$table->foreign('PSIC_BR_CODE', 'fk_PSIC_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('PSIC_SectorCode', 'fk_PSIC_SectorCode')->references('PSIC_SecCode')->on('cisa_psicsector')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cisa_psiccode', function(Blueprint $table)
		{
			$table->dropForeign('fk_PSIC_BRCODE');
			$table->dropForeign('fk_PSIC_SectorCode');
		});
	}

}
