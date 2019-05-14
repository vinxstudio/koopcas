<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActvtlogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('actvtlog', function(Blueprint $table)
		{
			$table->increments('ID');
			$table->smallInteger('UserID')->unsigned()->index('actvtUserID');
			$table->smallInteger('OvrdID')->unsigned()->nullable()->index('actvtOvrdID');
			$table->integer('ActvtListID')->unsigned()->index('FK_ActvtList');
			$table->dateTime('DateTimeAdded')->nullable()->index('actvtDateTimeAdded');
			$table->integer('ClientID')->unsigned()->nullable();
			$table->integer('ItemID')->unsigned()->nullable()->index('FK_actvtlog_ITEMID');
			$table->smallInteger('VendorID')->unsigned()->nullable()->index('FK_actvtlog_VENDORID');
			$table->integer('POID')->unsigned()->nullable();
			$table->integer('ActvtFieldID')->unsigned()->nullable()->index('FK_ActvtFieldID');
			$table->text('ActvtInfo', 65535)->nullable();
			$table->text('FromData', 65535)->nullable();
			$table->text('ToData', 65535)->nullable();
			$table->binary('FromImage', 16777215)->nullable();
			$table->binary('ToImage', 16777215)->nullable();
			$table->smallInteger('BR_CODE')->unsigned()->nullable();
			$table->boolean('SLC_CODE')->nullable();
			$table->boolean('SLT_CODE')->nullable();
			$table->integer('REF_NO')->unsigned()->nullable();
			$table->boolean('TR_CODE')->nullable()->index('FK_TR_CODE');
			$table->integer('TR_CTLNO')->unsigned()->nullable();
			$table->date('TR_DATE')->nullable()->index('actvtTR_DATE');
			$table->time('TR_TIME')->nullable();
			$table->decimal('TR_AMT', 15)->nullable()->index('actvtTR_AMT');
			$table->integer('LOANAPPID')->unsigned()->nullable();
			$table->integer('SOID')->unsigned()->nullable();
			$table->index(['BR_CODE','ActvtListID'], 'actvtActvtListID');
			$table->index(['BR_CODE','ClientID'], 'actvtClientID');
			$table->index(['BR_CODE','SLC_CODE','SLT_CODE'], 'actvtSLCSLT');
			$table->index(['BR_CODE','TR_CODE','TR_CTLNO'], 'actvtTR');
			$table->index(['BR_CODE','LOANAPPID'], 'FK_actvtlog_LOANAPP');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('actvtlog');
	}

}
