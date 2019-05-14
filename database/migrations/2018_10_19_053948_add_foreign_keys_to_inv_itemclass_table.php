<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInvItemclassTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('inv_itemclass', function(Blueprint $table)
		{
			$table->foreign('BR_CODE', 'FK_inv_itemclass_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('inv_itemclass', function(Blueprint $table)
		{
			$table->dropForeign('FK_inv_itemclass_BRCODE');
		});
	}

}
