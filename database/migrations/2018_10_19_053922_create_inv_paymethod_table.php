<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvPaymethodTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inv_paymethod', function(Blueprint $table)
		{
			$table->boolean('ID');
			$table->string('DESC1', 100);
			$table->string('DESC2', 100)->nullable();
			$table->smallInteger('BR_CODE')->unsigned();
			$table->boolean('TR_CODE')->index('FK_inv_paymethod_TRCODE');
			$table->boolean('SLC_CODE')->nullable();
			$table->boolean('SLT_CODE')->nullable();
			$table->string('COAID', 15)->nullable();
			$table->boolean('IsLocked')->nullable()->default(0);
			$table->boolean('IsNEWSLOnly')->nullable()->default(0);
			$table->boolean('IsMUSTHaveSL')->nullable()->default(0);
			$table->boolean('RequestCLIENTID')->nullable()->default(0);
			$table->primary(['ID','BR_CODE']);
			$table->index(['BR_CODE','SLC_CODE','SLT_CODE'], 'FK_inv_paymethod_SLCT_CODE');
			$table->index(['BR_CODE','COAID'], 'FK_inv_paymethod_COAID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inv_paymethod');
	}

}
