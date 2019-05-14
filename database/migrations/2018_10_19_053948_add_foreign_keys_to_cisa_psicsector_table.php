<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCisaPsicsectorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cisa_psicsector', function(Blueprint $table)
		{
			$table->foreign('PSIC_SecBR_CODE', 'fk_PSIC_SecBRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cisa_psicsector', function(Blueprint $table)
		{
			$table->dropForeign('fk_PSIC_SecBRCODE');
		});
	}

}
