<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToArTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ar', function(Blueprint $table)
		{
			$table->foreign('ARCOLLECTTYPE', 'FK_ar_COLLECTTYPE')->references('CollectTypeID')->on('collecttype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ARAMORTYPE', 'ar_AMORTYPE')->references('AmorTypeID')->on('amortype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ARBR_CODE', 'ar_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ARBR_CODE', 'ar_CLIENTID')->references('ClientIDBrCode')->on('client')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ARCOLLTYPE', 'ar_COLLTYPE')->references('CollateralTypeID')->on('collateraltype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ARDD_FLAG', 'ar_DD_FLAG')->references('DueDateTypeID')->on('duedatetype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ARDIMB_FREQ', 'ar_DIMB_FREQ')->references('DimFreqID')->on('dimfreq')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ARIPMT_MOD2', 'ar_IPMT_MOD2')->references('TermID')->on('term')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ARIPMT_MODE', 'ar_IPMT_MODE')->references('PaymentModeID')->on('paymentmode')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ARCLASS', 'ar_LOANCLASS')->references('LoanClassID')->on('loanclass')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ARMCLASS', 'ar_MCLASS')->references('BorrowerClassID')->on('borrowerclass')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ARND_FLAG', 'ar_ND_FLAG')->references('NumDaysID')->on('numdays')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ARPEN_MOD2', 'ar_PEN_MOD2')->references('TermID')->on('term')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ARPEN_MODE', 'ar_PEN_MODE')->references('PaymentModeID')->on('paymentmode')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ARPPMT_MOD2', 'ar_PPMT_MOD2')->references('TermID')->on('term')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ARPPMT_MODE', 'ar_PPMT_MODE')->references('PaymentModeID')->on('paymentmode')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ARPURPOSE', 'ar_PURPOSE')->references('LoanPurposeID')->on('loanpurpose')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ARBR_CODE', 'ar_SLCTREFNO')->references('MBR_CODE')->on('slmastersum')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('ARSTATUS', 'ar_STATUS')->references('CTS_TypeCode')->on('cts_type')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ARTERM_PERD', 'ar_TERM_PERD')->references('TermID')->on('term')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ARUpdUser', 'ar_UPDUSER')->references('AccessID')->on('access')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ar', function(Blueprint $table)
		{
			$table->dropForeign('FK_ar_COLLECTTYPE');
			$table->dropForeign('ar_AMORTYPE');
			$table->dropForeign('ar_BRCODE');
			$table->dropForeign('ar_CLIENTID');
			$table->dropForeign('ar_COLLTYPE');
			$table->dropForeign('ar_DD_FLAG');
			$table->dropForeign('ar_DIMB_FREQ');
			$table->dropForeign('ar_IPMT_MOD2');
			$table->dropForeign('ar_IPMT_MODE');
			$table->dropForeign('ar_LOANCLASS');
			$table->dropForeign('ar_MCLASS');
			$table->dropForeign('ar_ND_FLAG');
			$table->dropForeign('ar_PEN_MOD2');
			$table->dropForeign('ar_PEN_MODE');
			$table->dropForeign('ar_PPMT_MOD2');
			$table->dropForeign('ar_PPMT_MODE');
			$table->dropForeign('ar_PURPOSE');
			$table->dropForeign('ar_SLCTREFNO');
			$table->dropForeign('ar_STATUS');
			$table->dropForeign('ar_TERM_PERD');
			$table->dropForeign('ar_UPDUSER');
		});
	}

}
