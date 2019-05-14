<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvSttsumTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inv_sttsum', function(Blueprint $table)
		{
			$table->smallInteger('BR_CODE')->unsigned()->index('FK_inv_sttsum_BRCODE');
			$table->increments('TR_CTLNO');
			$table->string('TR_DOCNO', 8);
			$table->date('TR_DATE')->index('Index_TRDATE');
			$table->time('TR_TIME');
			$table->boolean('FROM_LOC');
			$table->boolean('TO_LOC');
			$table->text('EXPLANATION', 65535)->nullable();
			$table->boolean('StatusID')->index('FK_inv_sttsum_STATUS');
			$table->smallInteger('ENCDBY')->unsigned()->index('FK_inv_sttsum_ENCDBY');
			$table->dateTime('DATETIMEADDED');
			$table->index(['BR_CODE','FROM_LOC'], 'FK_inv_sttsum_FROMLOC');
			$table->index(['BR_CODE','TO_LOC'], 'FK_inv_sttsum_TOLOC');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inv_sttsum');
	}

}
