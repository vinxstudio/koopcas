<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvAdjreasonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inv_adjreason', function(Blueprint $table)
		{
			$table->boolean('ID')->primary();
			$table->string('DESC1', 100);
			$table->string('DESC2', 100)->nullable();
			$table->smallInteger('BR_CODE')->unsigned()->index('FK_inv_adjreason_BRCODE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inv_adjreason');
	}

}
