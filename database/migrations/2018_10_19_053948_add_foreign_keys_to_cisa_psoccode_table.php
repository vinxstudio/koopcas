<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCisaPsoccodeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cisa_psoccode', function(Blueprint $table)
		{
			$table->foreign('PSOC_BR_CODE', 'fk_PSOCBRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('PSOC_DivisionCode', 'fk_div_CODE')->references('PSOC_DivCode')->on('cisa_psocdiv')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cisa_psoccode', function(Blueprint $table)
		{
			$table->dropForeign('fk_PSOCBRCODE');
			$table->dropForeign('fk_div_CODE');
		});
	}

}
