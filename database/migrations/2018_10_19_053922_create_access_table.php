<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccessTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('access', function(Blueprint $table)
		{
			$table->smallInteger('AccessBR_CODE')->unsigned()->nullable();
			$table->smallInteger('AccessID', true)->unsigned();
			$table->string('AccessFName', 45)->nullable();
			$table->string('AccessLName', 45)->nullable();
			$table->string('AccessMName', 45)->nullable();
			$table->string('AccessSName', 45)->nullable();
			$table->string('AccessUserName')->default('');
			$table->text('AccessPassword', 65535)->nullable();
			$table->string('AccessLevel', 45)->nullable();
			$table->text('AccessCurrAssign', 65535)->nullable();
			$table->boolean('AccessTellerNumber')->nullable()->index('FK_access_TellerNumber');
			$table->decimal('AccessDisbLimit', 15)->nullable();
			$table->integer('AccessConnID')->unsigned()->nullable();
			$table->string('AccessHost', 100)->nullable();
			$table->date('AccessDate')->nullable();
			$table->time('AccessTime')->nullable();
			$table->boolean('AccessIsHeadCashier')->nullable();
			$table->boolean('AccessStartDay');
			$table->boolean('AccessEndDay');
			$table->boolean('AccessTagApproved');
			$table->string('AccessPriorityObjName', 45)->nullable();
			$table->decimal('AccessDisbursementLimit', 15)->nullable();
			$table->boolean('AccessCanReverse');
			$table->boolean('AccessPOSLocation')->nullable()->default(1);
			$table->boolean('AccessCanGrantRebate')->nullable()->default(0);
			$table->boolean('AccessIsDisabled')->nullable()->default(0);
			$table->smallInteger('AccessMaxLogins')->unsigned()->nullable()->default(3);
			$table->boolean('AccessCanBatchEditLoanSetups')->nullable()->default(0);
			$table->boolean('AccessCanAddNewClient')->nullable()->default(1);
			$table->boolean('AccessCanPostPartialPayment')->nullable()->default(0);
			$table->boolean('AccessCanPostWithHold')->nullable()->default(0);
			$table->boolean('AccessCanEditClientImages')->nullable()->default(0);
			$table->boolean('AccessCanViewItemCost')->nullable()->default(1);
			$table->boolean('AccessCanViewFOCashCOCI')->nullable()->default(1);
			$table->boolean('AccessCanBatchGenerateSOA')->nullable()->default(0);
			$table->boolean('AccessCanPostOverPayment')->nullable()->default(0);
			$table->string('AccessATMTerminalID', 8)->nullable();
			$table->boolean('AccessCanCreateLoanSetup')->nullable()->default(1);
			$table->boolean('AccessCanAddLoanApplication')->nullable()->default(0);
			$table->boolean('AccessCanEditLoanApplication')->nullable()->default(0);
			$table->boolean('AccessCanDeleteLoanApplication')->nullable()->default(0);
			$table->boolean('AccessCanApproveLoanApplication')->nullable()->default(0);
			$table->boolean('AccessCanAccessBackOffice')->nullable()->default(1);
			$table->date('AccessExpiryDate')->nullable();
			$table->integer('AccessExpiresInDays')->unsigned()->nullable()->default(90);
			$table->date('AccessLastChangePassDate')->nullable();
			$table->boolean('AccessCanGenOtherFORep')->nullable()->default(0);
			$table->boolean('AccessCanOpenATMGW')->nullable()->default(0);
			$table->boolean('AccessCanTerminateUser')->nullable()->default(0);
			$table->boolean('AccessCanPostUncleared')->nullable()->default(0);
			$table->boolean('AccessCanBackDateFO')->nullable()->default(0);
			$table->boolean('AccessCanEditClientName')->nullable()->default(0);
			$table->boolean('AccessCanGenerateSOA')->nullable()->default(1);
			$table->boolean('AccessDepartment')->nullable();
			$table->boolean('AccessCanChooseDepartment')->nullable()->default(0);
			$table->boolean('AccessCanAddHold')->nullable()->default(0);
			$table->boolean('AccessCanDeleteHold')->nullable()->default(0);
			$table->boolean('AccessCanModifyHold')->nullable()->default(0);
			$table->text('AccessMTMPWD', 65535)->nullable();
			$table->string('AccessMTMTID', 10)->nullable();
			$table->text('AccessRestrik', 65535)->nullable();
			$table->boolean('AccessCanExportReport')->nullable()->default(0);
			$table->boolean('AccessCanViewActvtLogs')->nullable()->default(0);
			$table->boolean('AccessCanEncodePDCFO')->nullable()->default(0);
			$table->boolean('AccessCanRunRequestServer')->nullable()->default(0);
			$table->integer('AccessClientID')->unsigned()->nullable();
			$table->boolean('AccessCanGenRepNoRestrict')->nullable()->default(0);
			$table->boolean('AccessCanPostNegativeItemStock')->nullable()->default(0);
			$table->boolean('AccessCanSearchClientName')->nullable()->default(0);
			$table->boolean('AccessCanAddEditRecruitedBy')->nullable()->default(0);
			$table->boolean('AccessCanEditPostedLoanSetup')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('access');
	}

}
