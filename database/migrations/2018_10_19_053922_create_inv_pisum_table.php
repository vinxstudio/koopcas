<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvPisumTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inv_pisum', function(Blueprint $table)
		{
			$table->smallInteger('BR_CODE')->unsigned()->index('FK_inv_pisum_BRCODE');
			$table->increments('TR_CTLNO');
			$table->string('TR_DOCNO', 8);
			$table->date('TR_DATE')->index('Index_TRDATE');
			$table->date('BEGIN_DATE')->nullable();
			$table->time('TR_TIME');
			$table->text('EXPLANATION', 65535)->nullable();
			$table->boolean('StatusID')->index('FK_inv_pisum_STATUS');
			$table->smallInteger('ENCDBY')->unsigned()->index('FK_inv_pisum_ENCDBY');
			$table->dateTime('DATETIMEADDED');
			$table->boolean('LOCATIONID')->default(1);
			$table->index(['LOCATIONID','BR_CODE'], 'FK_inv_pisum_LOCATIONID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inv_pisum');
	}

}
