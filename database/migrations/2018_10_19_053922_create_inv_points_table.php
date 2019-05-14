<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvPointsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inv_points', function(Blueprint $table)
		{
			$table->smallInteger('ID', true)->unsigned();
			$table->string('DESC1', 100);
			$table->string('DESC2', 100)->nullable();
			$table->smallInteger('BR_CODE')->unsigned()->index('FK_inv_points_BRCODE');
			$table->string('SLCT_CODE', 100)->nullable();
			$table->string('COAID', 100)->nullable();
			$table->string('COAIDEXP', 100)->nullable();
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
		Schema::drop('inv_points');
	}

}
