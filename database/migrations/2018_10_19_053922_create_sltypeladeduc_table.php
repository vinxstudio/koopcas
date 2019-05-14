<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSltypeladeducTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sltypeladeduc', function(Blueprint $table)
		{
			$table->smallInteger('BR_CODE')->unsigned();
			$table->boolean('SLC_CODE');
			$table->boolean('SLT_CODE');
			$table->boolean('SEQNO');
			$table->string('DEDUCDESC', 100)->nullable();
			$table->boolean('LASLC_CODE')->nullable();
			$table->boolean('LASLT_CODE')->nullable();
			$table->boolean('LASLE_CODE')->nullable();
			$table->string('LAACCT_CODE', 10)->nullable();
			$table->string('LAFORMULA', 100)->nullable();
			$table->primary(['BR_CODE','SEQNO','SLT_CODE','SLC_CODE']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sltypeladeduc');
	}

}
