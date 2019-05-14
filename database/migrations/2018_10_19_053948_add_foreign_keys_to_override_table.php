<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOverrideTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('override', function(Blueprint $table)
		{
			$table->foreign('BR_CODE', 'override_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('override', function(Blueprint $table)
		{
			$table->dropForeign('override_BRCODE');
		});
	}

}
