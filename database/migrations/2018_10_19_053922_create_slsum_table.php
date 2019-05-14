<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSlsumTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('slsum', function(Blueprint $table)
		{
			$table->smallInteger('SL_BRCODE')->unsigned();
			$table->integer('SL_CLIENTID')->unsigned();
			$table->boolean('SLC_CODE');
			$table->boolean('SLT_CODE');
			$table->integer('REF_NO')->unsigned();
			$table->boolean('SLE_CODE')->index('SLSUM_SLE');
			$table->date('TR_DATE');
			$table->date('TRANSFERDATE')->nullable();
			$table->primary(['SL_BRCODE','SL_CLIENTID','SLC_CODE','SLT_CODE','REF_NO','SLE_CODE']);
			$table->index(['SL_BRCODE','SLC_CODE','SLT_CODE','REF_NO','SL_CLIENTID'], 'SLSUM_SLBCTREFCLIENT');
			$table->index(['SL_BRCODE','SLC_CODE','SLT_CODE','REF_NO','SLE_CODE','SL_CLIENTID'], 'SLSUM_ACCTNO');
			$table->index(['SL_BRCODE','SL_CLIENTID','SLC_CODE','SLE_CODE','SLT_CODE'], 'SLSUM_SLREF2');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('slsum');
	}

}
