<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLoanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('loan', function(Blueprint $table)
		{
			$table->smallInteger('LoanBR_CODE')->unsigned();
			$table->boolean('LoanSLC_CODE');
			$table->boolean('LoanSLT_CODE');
			$table->integer('LoanREF_NO')->unsigned();
			$table->integer('ClientIDLoan')->unsigned();
			$table->boolean('LoanLOANCLASS')->nullable()->index('loan_LOANCLASS');
			$table->boolean('LoanPURPOSE')->nullable()->index('loan_PURPOSE');
			$table->decimal('LoanPAMT', 15)->nullable();
			$table->boolean('LoanSTATUS')->nullable()->index('loan_STATUS');
			$table->decimal('LoanENCUMB', 15)->nullable();
			$table->date('LoanTR_DATE')->nullable();
			$table->integer('LoanTERMS')->unsigned()->nullable();
			$table->boolean('LoanTERM_PERD')->nullable()->index('loan_TERM_PERD');
			$table->boolean('LoanPPMT_MODE')->nullable()->index('loan_PPMT_MODE');
			$table->integer('LoanPPMT_MFAC')->unsigned()->nullable();
			$table->boolean('LoanPPMT_MOD2')->nullable()->index('loan_PPMT_MOD2');
			$table->decimal('LoanINT_RATE', 13)->nullable();
			$table->boolean('LoanAMORTYPE')->nullable()->index('loan_AMORTYPE');
			$table->boolean('LoanDIMB_FREQ')->nullable()->index('loan_DIMB_FREQ');
			$table->boolean('LoanIPMT_MODE')->nullable()->index('loan_IPMT_MODE');
			$table->integer('LoanIPMT_MFAC')->unsigned()->nullable();
			$table->boolean('LoanIPMT_MOD2')->nullable()->index('loan_IPMT_MOD2');
			$table->decimal('LoanPEN_RATE', 5)->unsigned()->nullable();
			$table->boolean('LoanPEN_MODE')->nullable()->index('loan_PEN_MODE');
			$table->integer('LoanPEN_MFAC')->unsigned()->nullable();
			$table->boolean('LoanPEN_MOD2')->nullable()->index('loan_PEN_MOD2');
			$table->boolean('LoanDD_FLAG')->nullable()->index('loan_DD_FLAG');
			$table->integer('LoanINT_GP')->unsigned()->nullable();
			$table->integer('LoanPRIN_GP')->unsigned()->nullable();
			$table->date('LoanFID_DATE')->nullable();
			$table->date('LoanFPD_DATE')->nullable();
			$table->date('LoanMAT_DATE')->nullable();
			$table->boolean('LoanND_FLAG')->nullable()->index('loan_ND_FLAG');
			$table->boolean('LoanMCLASS')->nullable()->index('loan_MCLASS');
			$table->string('LoanACCTOFF', 10)->nullable();
			$table->boolean('LoanRESTRUCT')->nullable();
			$table->boolean('LoanXSLT_CODE')->nullable();
			$table->integer('LoanXREF_NO')->unsigned()->nullable();
			$table->boolean('LoanCOLLTYPE')->nullable()->index('loan_COLLTYPE');
			$table->decimal('LoanCOLLAMT', 15)->nullable();
			$table->text('LoanCOLLDESC')->nullable();
			$table->text('LoanRemarks')->nullable();
			$table->dateTime('LoanUPDDATETIME')->nullable();
			$table->smallInteger('LoanUpdUser')->unsigned()->nullable()->index('loan_UPDUSER');
			$table->decimal('LoanCBUAMT', 15)->nullable();
			$table->decimal('LoanSAVAMT', 15)->nullable();
			$table->string('LoanCI', 10)->nullable();
			$table->string('LoanXXREF_NO', 30)->nullable();
			$table->decimal('LoanCRLIMIT', 15)->nullable();
			$table->smallInteger('LoanPENGP')->unsigned()->nullable()->default(30);
			$table->smallInteger('LoanPREPAIDPYMTS')->unsigned()->nullable();
			$table->boolean('LoanISDISTRIBUTEUNPAIDINT')->nullable()->default(0);
			$table->string('LoanCOLLECTOR', 10)->nullable();
			$table->boolean('LoanSUBTYPEID')->nullable();
			$table->boolean('LoanIsExcludeSundays')->nullable();
			$table->boolean('LoanIsExcludeHolidays')->nullable();
			$table->decimal('LoanPAMT2', 15)->nullable()->default(0.00);
			$table->boolean('LoanCOLLECTTYPE')->nullable()->index('FK_loan_COLLECTTYPE');
			$table->decimal('LoanCOLLFEE', 15)->nullable();
			$table->smallInteger('LoanINDUSTRY')->unsigned()->nullable()->index('FK_loan_INDUSTRY');
			$table->boolean('LoanMemberRating')->nullable()->index('FK_loan_loanmemberrating');
			$table->boolean('LoanSecurity')->nullable();
			$table->smallInteger('LoanBank')->unsigned()->nullable();
			$table->primary(['LoanBR_CODE','LoanSLC_CODE','LoanSLT_CODE','LoanREF_NO','ClientIDLoan']);
			$table->index(['LoanBR_CODE','ClientIDLoan'], 'loan_CLIENTID');
			$table->index(['LoanBR_CODE','ClientIDLoan','LoanSLC_CODE','LoanSLT_CODE','LoanREF_NO'], 'loan_SLREF1');
			$table->index(['LoanBR_CODE','LoanSUBTYPEID'], 'FK_loan_LOANSUBTYPE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('loan');
	}

}
