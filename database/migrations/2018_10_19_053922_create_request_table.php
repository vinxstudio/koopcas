<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRequestTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('request', function(Blueprint $table)
		{
			$table->increments('ID');
			$table->boolean('REQ_STATUS')->nullable()->index('FK_request_REQSTATUS');
			$table->boolean('REQ_CODE')->nullable()->index('FK_request_REQCODE');
			$table->smallInteger('BR_CODE')->unsigned()->nullable();
			$table->integer('CLIENTID')->unsigned()->nullable();
			$table->boolean('SLC_CODE')->nullable();
			$table->boolean('SLT_CODE')->nullable();
			$table->integer('REF_NO')->unsigned()->nullable();
			$table->boolean('SLE_CODE')->nullable()->index('FK_request_SLE');
			$table->date('TR_DATE')->nullable();
			$table->decimal('BALANCE', 15)->nullable();
			$table->decimal('AVAIL_BAL', 15)->nullable();
			$table->decimal('PRINCIPAL', 15)->nullable();
			$table->decimal('INTEREST', 15)->nullable();
			$table->decimal('PENALTY', 15)->nullable();
			$table->decimal('AMT', 15)->nullable();
			$table->text('ERRMSG', 65535)->nullable();
			$table->string('TERMINALID', 20)->nullable();
			$table->dateTime('TRANDTIME')->nullable();
			$table->decimal('CASH', 15)->nullable();
			$table->text('COCI', 65535)->nullable();
			$table->integer('TR_CTLNO')->unsigned()->nullable();
			$table->index(['BR_CODE','CLIENTID'], 'FK_request_CLIENTID');
			$table->index(['BR_CODE','SLC_CODE','SLT_CODE'], 'FK_request_SLTYPE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('request');
	}

}
