<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLoansldeducTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('loansldeduc', function(Blueprint $table)
		{
			$table->increments('ID');
			$table->smallInteger('BR_CODE')->unsigned();
			$table->boolean('SLC_CODE');
			$table->boolean('SLT_CODE');
			$table->string('DESCR', 45);
			$table->text('FORMULA', 65535);
			$table->integer('CODEID')->unsigned()->nullable()->index('FK_loansldeduc_CODESTORAGE');
			$table->boolean('DSLC_CODE')->nullable();
			$table->boolean('DSLT_CODE')->nullable();
			$table->boolean('DSLE_CODE')->nullable();
			$table->string('DACCT_CODE', 15)->nullable();
			$table->boolean('SLBEHAVIOR')->nullable()->index('FK_loansldeduc_SLBEHAVIOR');
			$table->boolean('ISAUTOLOAD')->default(0);
			$table->smallInteger('DEDUCGROUP')->unsigned()->nullable()->index('FK_loansldeduc_DEDUCGROUP');
			$table->boolean('DEDUCORDER')->nullable()->default(1);
			$table->integer('DCLIENTID')->unsigned()->nullable();
			$table->index(['BR_CODE','SLC_CODE','SLT_CODE'], 'FK_loansldeduc_SLTYPE');
			$table->index(['BR_CODE','DSLC_CODE','DSLT_CODE','DSLE_CODE'], 'FK_loansldeduc_GLCONTROL');
			$table->index(['BR_CODE','DACCT_CODE'], 'FK_loansldeduc_COA');
			$table->index(['BR_CODE','DCLIENTID'], 'FK_loansldeduc_CLIENTID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('loansldeduc');
	}

}
