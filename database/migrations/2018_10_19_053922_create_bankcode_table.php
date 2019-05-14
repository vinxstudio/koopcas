<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBankcodeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bankcode', function(Blueprint $table)
		{
			$table->smallInteger('BCBR_CODE')->unsigned();
			$table->smallInteger('BCID', true)->unsigned();
			$table->string('BCDesc', 20);
			$table->string('BCDesc2', 40)->nullable();
			$table->string('BCACCTNO', 20)->nullable();
			$table->string('BCCOAID', 15)->nullable();
			$table->smallInteger('BCUPDBY')->unsigned()->nullable()->index('BC_UPDBY');
			$table->dateTime('BCUPDDATETIME')->nullable();
			$table->index(['BCBR_CODE','BCCOAID'], 'BC_COAID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bankcode');
	}

}
