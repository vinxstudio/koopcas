<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMemSlmastersumTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mem_slmastersum', function(Blueprint $table)
		{
			$table->smallInteger('MBR_CODE')->unsigned();
			$table->boolean('MSLC_CODE');
			$table->boolean('MSLT_CODE');
			$table->integer('MREF_NO')->unsigned();
			$table->integer('MCLIENTID')->unsigned();
			$table->primary(['MBR_CODE','MSLC_CODE','MSLT_CODE','MREF_NO','MCLIENTID']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mem_slmastersum');
	}

}
