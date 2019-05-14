<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCisaPsocdivTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cisa_psocdiv', function(Blueprint $table)
		{
			$table->foreign('PSOC_DivBRCODE', 'fk_DivBR_CODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('PSOC_SectorCODE', 'fk_SectorCode')->references('PSOC_SecCode')->on('cisa_psocsector')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cisa_psocdiv', function(Blueprint $table)
		{
			$table->dropForeign('fk_DivBR_CODE');
			$table->dropForeign('fk_SectorCode');
		});
	}

}
