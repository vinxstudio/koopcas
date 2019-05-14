<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCisaSltypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cisa_sltype', function(Blueprint $table)
		{
			$table->foreign('CISA_SLTypeBRCODE', 'FK_CISASLType_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cisa_sltype', function(Blueprint $table)
		{
			$table->dropForeign('FK_CISASLType_BRCODE');
		});
	}

}
