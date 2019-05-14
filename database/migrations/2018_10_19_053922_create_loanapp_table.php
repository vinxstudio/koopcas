<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLoanappTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('loanapp', function(Blueprint $table)
		{
			$table->smallInteger('BR_CODE')->unsigned();
			$table->integer('ID')->unsigned();
			$table->boolean('SLC_CODE')->nullable();
			$table->boolean('SLT_CODE')->nullable();
			$table->integer('REF_NO')->unsigned()->nullable();
			$table->integer('CLIENTID')->unsigned()->nullable();
			$table->boolean('STATUSID')->nullable()->index('FK_loanapp_STATUSID');
			$table->date('TR_DATE')->nullable();
			$table->time('TR_TIME')->nullable();
			$table->date('RTR_DATE')->nullable();
			$table->smallInteger('ENCDBY')->unsigned()->nullable();
			$table->date('APPRV_DATE')->nullable();
			$table->smallInteger('APPRVBY')->unsigned()->nullable()->index('FK_loanapp_APPRVBY');
			$table->boolean('TR_CODE')->nullable();
			$table->integer('TR_CTLNO')->unsigned()->nullable();
			$table->boolean('NPSLC_CODE')->nullable();
			$table->boolean('NPSLT_CODE')->nullable();
			$table->integer('NPREF_NO')->unsigned()->nullable();
			$table->string('NPACCT_CODE', 15)->nullable();
			$table->smallInteger('DEDUCGROUP')->unsigned()->nullable()->index('FK_loanapp_DEDUCGROUP');
			$table->string('DOC_NO', 8)->nullable();
			$table->text('PROPOSAL', 65535)->nullable();
			$table->text('CIREPORT', 65535)->nullable();
			$table->text('BASISRECOMM', 65535)->nullable();
			$table->text('REMARKS', 65535)->nullable();
			$table->string('REPAYMENT', 250)->nullable();
			$table->primary(['BR_CODE','ID']);
			$table->index(['BR_CODE','SLC_CODE','SLT_CODE','REF_NO','CLIENTID'], 'FK_loanapp_SLMASTERSUM');
			$table->index(['BR_CODE','TR_CODE','TR_CTLNO'], 'FK_loanapp_TRANSSUM');
			$table->index(['BR_CODE','NPSLC_CODE','NPSLT_CODE','NPREF_NO','CLIENTID'], 'FK_loanapp_NP_SLMASTERSUM');
			$table->index(['BR_CODE','NPACCT_CODE'], 'FK_loanapp_COA');
			$table->index(['BR_CODE','CLIENTID'], 'FK_loanapp_CLIENTID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('loanapp');
	}

}
