<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLoanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('loan', function(Blueprint $table)
		{
			$table->foreign('LoanCOLLECTTYPE', 'FK_loan_COLLECTTYPE')->references('CollectTypeID')->on('collecttype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('LoanINDUSTRY', 'FK_loan_INDUSTRY')->references('Ind_CodeID')->on('ind_code')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('LoanBR_CODE', 'FK_loan_LOANSUBTYPE')->references('BR_CODE')->on('loansubtype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('LoanMemberRating', 'FK_loan_loanmemberrating')->references('RatingID')->on('rating')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('LoanAMORTYPE', 'loan_AMORTYPE')->references('AmorTypeID')->on('amortype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('LoanBR_CODE', 'loan_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('LoanBR_CODE', 'loan_CLIENTID')->references('ClientIDBrCode')->on('client')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('LoanCOLLTYPE', 'loan_COLLTYPE')->references('CollateralTypeID')->on('collateraltype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('LoanDD_FLAG', 'loan_DD_FLAG')->references('DueDateTypeID')->on('duedatetype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('LoanDIMB_FREQ', 'loan_DIMB_FREQ')->references('DimFreqID')->on('dimfreq')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('LoanIPMT_MOD2', 'loan_IPMT_MOD2')->references('TermID')->on('term')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('LoanIPMT_MODE', 'loan_IPMT_MODE')->references('PaymentModeID')->on('paymentmode')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('LoanLOANCLASS', 'loan_LOANCLASS')->references('LoanClassID')->on('loanclass')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('LoanMCLASS', 'loan_MCLASS')->references('BorrowerClassID')->on('borrowerclass')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('LoanND_FLAG', 'loan_ND_FLAG')->references('NumDaysID')->on('numdays')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('LoanPEN_MOD2', 'loan_PEN_MOD2')->references('TermID')->on('term')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('LoanPEN_MODE', 'loan_PEN_MODE')->references('PaymentModeID')->on('paymentmode')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('LoanPPMT_MOD2', 'loan_PPMT_MOD2')->references('TermID')->on('term')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('LoanPPMT_MODE', 'loan_PPMT_MODE')->references('PaymentModeID')->on('paymentmode')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('LoanPURPOSE', 'loan_PURPOSE')->references('LoanPurposeID')->on('loanpurpose')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('LoanBR_CODE', 'loan_SLMASTERSUM')->references('MBR_CODE')->on('slmastersum')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('LoanSTATUS', 'loan_STATUS')->references('CTS_TypeCode')->on('cts_type')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('LoanTERM_PERD', 'loan_TERM_PERD')->references('TermID')->on('term')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('LoanUpdUser', 'loan_UPDUSER')->references('AccessID')->on('access')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('loan', function(Blueprint $table)
		{
			$table->dropForeign('FK_loan_COLLECTTYPE');
			$table->dropForeign('FK_loan_INDUSTRY');
			$table->dropForeign('FK_loan_LOANSUBTYPE');
			$table->dropForeign('FK_loan_loanmemberrating');
			$table->dropForeign('loan_AMORTYPE');
			$table->dropForeign('loan_BRCODE');
			$table->dropForeign('loan_CLIENTID');
			$table->dropForeign('loan_COLLTYPE');
			$table->dropForeign('loan_DD_FLAG');
			$table->dropForeign('loan_DIMB_FREQ');
			$table->dropForeign('loan_IPMT_MOD2');
			$table->dropForeign('loan_IPMT_MODE');
			$table->dropForeign('loan_LOANCLASS');
			$table->dropForeign('loan_MCLASS');
			$table->dropForeign('loan_ND_FLAG');
			$table->dropForeign('loan_PEN_MOD2');
			$table->dropForeign('loan_PEN_MODE');
			$table->dropForeign('loan_PPMT_MOD2');
			$table->dropForeign('loan_PPMT_MODE');
			$table->dropForeign('loan_PURPOSE');
			$table->dropForeign('loan_SLMASTERSUM');
			$table->dropForeign('loan_STATUS');
			$table->dropForeign('loan_TERM_PERD');
			$table->dropForeign('loan_UPDUSER');
		});
	}

}
