<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransatmTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transatm', function(Blueprint $table)
		{
			$table->increments('ID');
			$table->smallInteger('BR_CODE')->unsigned()->nullable()->index('FK_transatm_BRCODE');
			$table->string('CARDNO', 20)->nullable()->index('Index_CARDNO');
			$table->string('SEQNO', 20)->nullable();
			$table->boolean('ATMTR_CODE')->nullable()->index('FK_transatm_ATMTRCODE');
			$table->string('ACCTNO', 20)->nullable()->index('Index_ACCTNO');
			$table->decimal('TR_AMT', 15)->nullable();
			$table->string('TERMNLID', 18)->nullable();
			$table->dateTime('TRANDTIME')->nullable()->index('Index_TRANDTIME');
			$table->string('ACCTNO2', 20)->nullable();
			$table->string('DESTBANK', 20)->nullable();
			$table->string('TRACENO', 20)->nullable();
			$table->string('PROCESSCODE', 20)->nullable();
			$table->decimal('SRVCHARGE', 15)->nullable();
			$table->decimal('CURRBAL', 15)->nullable();
			$table->decimal('AVAILBAL', 15)->nullable();
			$table->string('STATUS', 50)->nullable();
			$table->decimal('TIMELAPSED', 5)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('transatm');
	}

}
