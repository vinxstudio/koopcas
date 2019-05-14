<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWkfcisdTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wkfcisd', function(Blueprint $table)
		{
			$table->smallInteger('BR_CODE')->unsigned();
			$table->integer('CLIENTID')->unsigned()->nullable();
			$table->text('CLIENTNAME', 65535)->nullable();
			$table->boolean('SLC_CODE')->nullable();
			$table->boolean('SLT_CODE')->nullable();
			$table->integer('REF_NO')->unsigned()->nullable();
			$table->boolean('SLE_CODE')->nullable();
			$table->boolean('CTS_NUM')->nullable();
			$table->decimal('INTERESTRATE', 15)->nullable();
			$table->decimal('WTAXRATE', 15)->nullable();
			$table->decimal('MINADB', 15)->nullable();
			$table->decimal('MAXADB', 15)->nullable();
			$table->string('INTEXPGLACCT', 10)->nullable()->index('wkfisd_INTEXPGLACCT');
			$table->string('WTAXPAYGLACCT', 10)->nullable()->index('wkfisd_WTAXPAYGLACCT');
			$table->string('ACCOUNTTYPE', 30)->nullable();
			$table->string('ACCT_CODE', 10)->nullable();
			$table->decimal('BALANCE', 15)->nullable();
			$table->decimal('ADB', 15)->nullable();
			$table->boolean('INCLUDETAG')->nullable();
			$table->decimal('INTERESTAMT', 15)->nullable();
			$table->decimal('WTAXAMT', 15)->nullable();
			$table->index(['BR_CODE','WTAXPAYGLACCT'], 'wkfisd_CLIENTID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wkfcisd');
	}

}
