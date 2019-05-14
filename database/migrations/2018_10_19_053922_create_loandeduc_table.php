<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLoandeducTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('loandeduc', function(Blueprint $table)
		{
			$table->smallInteger('BR_CODE')->unsigned();
			$table->integer('LOANAPPID')->unsigned();
			$table->boolean('SEQNO');
			$table->string('DEDUCDESC', 100)->nullable();
			$table->boolean('SLC_CODE')->nullable();
			$table->boolean('SLT_CODE')->nullable();
			$table->boolean('SLE_CODE')->nullable();
			$table->integer('REF_NO')->unsigned()->nullable();
			$table->integer('CLIENTID')->unsigned()->nullable();
			$table->string('ACCT_CODE', 15)->nullable();
			$table->decimal('AMT', 15)->nullable();
			$table->boolean('SLBEHAVIOR')->nullable()->index('FK_loandeduc_SLBEHAVIOR');
			$table->primary(['BR_CODE','LOANAPPID','SEQNO']);
			$table->index(['BR_CODE','ACCT_CODE'], 'FK_loandeduc_COA1');
			$table->index(['BR_CODE','CLIENTID'], 'FK_loandeduc_CLIENTID1');
			$table->index(['BR_CODE','SLC_CODE','SLT_CODE'], 'FK_loandeduc_SLTYPE1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('loandeduc');
	}

}
