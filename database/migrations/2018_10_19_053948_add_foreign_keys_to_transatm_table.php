<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTransatmTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('transatm', function(Blueprint $table)
		{
			$table->foreign('ATMTR_CODE', 'FK_transatm_ATMTRCODE')->references('ID')->on('transtypeatm')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BR_CODE', 'FK_transatm_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('transatm', function(Blueprint $table)
		{
			$table->dropForeign('FK_transatm_ATMTRCODE');
			$table->dropForeign('FK_transatm_BRCODE');
		});
	}

}
