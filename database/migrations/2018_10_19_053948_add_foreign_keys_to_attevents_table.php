<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAtteventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('attevents', function(Blueprint $table)
		{
			$table->foreign('BR_CODE', 'FK_attevents_BR_CODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('attevents', function(Blueprint $table)
		{
			$table->dropForeign('FK_attevents_BR_CODE');
		});
	}

}
