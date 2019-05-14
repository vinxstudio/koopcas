<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSlmastersumTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('slmastersum', function(Blueprint $table)
		{
			$table->smallInteger('MBR_CODE')->unsigned();
			$table->boolean('MSLC_CODE');
			$table->boolean('MSLT_CODE');
			$table->integer('MREF_NO')->unsigned();
			$table->integer('MCLIENTID')->unsigned();
			$table->primary(['MBR_CODE','MSLC_CODE','MSLT_CODE','MREF_NO','MCLIENTID']);
			$table->index(['MBR_CODE','MCLIENTID'], 'slmastersum_CLIENTID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('slmastersum');
	}

}
