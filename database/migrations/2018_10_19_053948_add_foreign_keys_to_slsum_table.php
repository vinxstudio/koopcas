<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSlsumTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('slsum', function(Blueprint $table)
		{
			$table->foreign('SL_BRCODE', 'SLSUM_SLBCTREFCLIENT')->references('MBR_CODE')->on('slmastersum')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('SLE_CODE', 'SLSUM_SLE')->references('SLE_TypeCode')->on('sle_type')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('slsum', function(Blueprint $table)
		{
			$table->dropForeign('SLSUM_SLBCTREFCLIENT');
			$table->dropForeign('SLSUM_SLE');
		});
	}

}
