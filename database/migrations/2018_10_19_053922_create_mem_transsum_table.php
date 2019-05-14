<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMemTranssumTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mem_transsum', function(Blueprint $table)
		{
			$table->smallInteger('TR_BRCODE')->unsigned();
			$table->smallInteger('TR_YEAR')->unsigned();
			$table->boolean('TR_MODULE');
			$table->boolean('TR_CODE')->index('memtranssum_TRCODE');
			$table->integer('TR_CTLNO')->unsigned();
			$table->string('TR_DOCNO', 8)->nullable();
			$table->date('TR_DATE')->nullable();
			$table->time('TR_TIME')->nullable();
			$table->integer('TR_CLIENTID')->unsigned()->nullable();
			$table->string('BATCH_NO', 45)->nullable();
			$table->primary(['TR_BRCODE','TR_YEAR','TR_MODULE','TR_CODE','TR_CTLNO']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mem_transsum');
	}

}
