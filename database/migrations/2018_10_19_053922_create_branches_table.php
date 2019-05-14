<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBranchesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('branches', function(Blueprint $table)
		{
			$table->smallInteger('BranchesID')->unsigned()->default(0)->primary();
			$table->string('BranchesDesc', 45)->default('');
			$table->string('Address', 200);
			$table->string('Manager', 200);
			$table->string('PO_ContactName', 200);
			$table->string('ContactNumbers', 200);
			$table->string('TIN', 200);
			$table->string('POS_SerialNumber', 100);
			$table->string('POS_MIN', 100);
			$table->string('EmailAddress', 100);
			$table->string('POS_PermitNumber', 200);
			$table->boolean('IsEnableRebates')->nullable()->default(0);
			$table->boolean('REB_SLC_CODE')->nullable();
			$table->boolean('REB_SLT_CODE')->nullable();
			$table->string('REB_EXPACCT', 15)->nullable();
			$table->boolean('IsConsolidateRebateEntries')->nullable()->default(0);
			$table->string('CDAREGNUM', 100)->nullable();
			$table->string('ACRONYM', 45)->nullable();
			$table->string('PN_LOCATION', 200)->nullable();
			$table->string('PN_SS_AT', 200)->nullable();
			$table->boolean('LottoNumDigit')->nullable()->default(0);
			$table->decimal('LottoDepositLimit', 15)->unsigned()->nullable()->default(0.00);
			$table->index(['BranchesID','REB_EXPACCT'], 'FK_branches_REBEXPACCT');
			$table->index(['BranchesID','REB_SLC_CODE','REB_SLT_CODE'], 'FK_branches_REBSLCT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('branches');
	}

}
