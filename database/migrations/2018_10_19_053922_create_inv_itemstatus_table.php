<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvItemstatusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inv_itemstatus', function(Blueprint $table)
		{
			$table->boolean('ID');
			$table->string('DESC1', 100);
			$table->string('DESC2', 100)->nullable();
			$table->smallInteger('BR_CODE')->unsigned()->index('FK_inv_itemstatus_BRCODE');
			$table->primary(['ID','BR_CODE']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inv_itemstatus');
	}

}
