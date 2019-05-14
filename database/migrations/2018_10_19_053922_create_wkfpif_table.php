<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWkfpifTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wkfpif', function(Blueprint $table)
		{
			$table->smallInteger('BR_CODE')->unsigned();
			$table->integer('CLIENTID')->unsigned();
			$table->boolean('SLC_CODE');
			$table->boolean('SLT_CODE');
			$table->integer('REF_NO')->unsigned();
			$table->date('TD_DATE');
			$table->boolean('TR_CODE')->nullable();
			$table->string('TR_CTLNO', 8)->nullable();
			$table->decimal('TR_AMT', 15)->nullable();
			$table->boolean('SLE_CODE')->nullable();
			$table->boolean('ADJ_FLAG')->nullable();
			$table->decimal('PRIN_BAL', 15)->nullable();
			$table->integer('AI_NDAYS')->unsigned()->nullable();
			$table->decimal('INTEARNED', 15)->nullable();
			$table->decimal('ACCUM_IE', 15)->nullable();
			$table->decimal('ACCUM_AIR', 15)->nullable();
			$table->decimal('ACCUM_AIP', 15)->nullable();
			$table->decimal('INT_PAID', 15)->nullable();
			$table->decimal('ACCUM_UID', 15)->nullable();
			$table->decimal('ACCUM_UIA', 15)->nullable();
			$table->decimal('PRIN_DUE', 15)->nullable();
			$table->decimal('INT_DUE', 15)->nullable();
			$table->decimal('SB_BAL', 15)->nullable();
			$table->decimal('DELQ_PRIN', 15)->nullable();
			$table->string('PEN_FLAG', 1)->nullable();
			$table->string('DB_FLAG', 1)->nullable();
			$table->decimal('PEN_DUE', 15)->nullable();
			$table->decimal('ACCUM_PEN', 15)->nullable();
			$table->decimal('PEN_PAID', 15)->nullable();
			$table->decimal('BalBase', 15)->nullable();
			$table->decimal('Serv_Fee', 15)->nullable();
			$table->integer('SEQNO')->unsigned()->nullable();
			$table->integer('NDAYS_PASTDUE')->unsigned()->nullable();
			$table->integer('NDEL_AMORT')->unsigned()->nullable();
			$table->index(['BR_CODE','SLC_CODE','SLT_CODE','REF_NO','CLIENTID'], 'Index_2');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wkfpif');
	}

}
