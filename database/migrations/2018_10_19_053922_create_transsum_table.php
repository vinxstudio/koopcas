<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTranssumTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transsum', function(Blueprint $table)
		{
			$table->smallInteger('TR_BRCODE')->unsigned()->index('transsum_TRBRCODE');
			$table->smallInteger('TR_YEAR')->unsigned();
			$table->boolean('TR_MODULE')->index('transsum_TRMODULE');
			$table->boolean('TR_CODE')->index('transsum_TRCODE');
			$table->integer('TR_CTLNO')->unsigned();
			$table->string('TR_DOCNO', 8)->nullable();
			$table->integer('INVTR_CTLNO')->unsigned()->nullable()->index('transsum_INVTR_CTLNO');
			$table->date('TR_DATE')->nullable();
			$table->time('TR_TIME')->nullable();
			$table->integer('TR_CLIENTID')->unsigned()->nullable();
			$table->string('BATCH_NO', 8)->nullable();
			$table->text('EXPLANATION', 65535)->nullable();
			$table->string('CLIENTNAME', 40)->nullable();
			$table->string('ANDOR_NAME', 40)->nullable();
			$table->boolean('IS_FO')->nullable()->default(0)->comment('Total Clrg Days');
			$table->dateTime('DATETIMEADDED')->nullable()->index('transsum_TRDATETIME');
			$table->decimal('CASHPAYMENT', 15)->nullable();
			$table->decimal('CREDITPAYMENT', 15)->nullable();
			$table->decimal('POINTSPAYMENT', 15)->nullable();
			$table->primary(['TR_BRCODE','TR_YEAR','TR_MODULE','TR_CODE','TR_CTLNO']);
			$table->index(['TR_BRCODE','TR_CLIENTID'], 'transsum_TRCLIENTID');
			$table->index(['TR_BRCODE','TR_CODE','TR_CTLNO'], 'index_BR_CODE_CTLNO');
			$table->index(['TR_BRCODE','IS_FO'], 'index_BRCODE_ISFO');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('transsum');
	}

}
