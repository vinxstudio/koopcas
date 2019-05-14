<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCisaPsocsectorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cisa_psocsector', function(Blueprint $table)
		{
			$table->foreign('PSOC_SecBR_CODE', 'cisa_psocsector_ibfk_1')->references('BranchesID')->on('branches')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cisa_psocsector', function(Blueprint $table)
		{
			$table->dropForeign('cisa_psocsector_ibfk_1');
		});
	}

}
