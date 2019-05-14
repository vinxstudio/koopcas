<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToHolidaysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('holidays', function(Blueprint $table)
		{
			$table->foreign('BR_CODE', 'FK_holidays_br_code')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('holidays', function(Blueprint $table)
		{
			$table->dropForeign('FK_holidays_br_code');
		});
	}

}
