<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvPosumTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inv_posum', function(Blueprint $table)
		{
			$table->smallInteger('BR_CODE')->unsigned()->index('FK_inv_posum_BRCODE');
			$table->increments('TR_CTLNO');
			$table->string('TR_DOCNO', 8);
			$table->smallInteger('VendorID')->unsigned()->nullable()->index('FK_inv_posum_VENDORID');
			$table->string('VENDORNAME', 200)->nullable();
			$table->date('TR_DATE')->index('Index_TRDATE');
			$table->date('REQ_DATE')->nullable();
			$table->time('TR_TIME');
			$table->text('EXPLANATION', 65535)->nullable();
			$table->boolean('StatusID')->index('FK_inv_posum_STATUS');
			$table->smallInteger('ENCDBY')->unsigned()->index('FK_inv_posum_ENCDBY');
			$table->dateTime('DATETIMEADDED');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inv_posum');
	}

}
