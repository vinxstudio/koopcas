<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('coa', function(Blueprint $table)
		{
			$table->smallInteger('COABR_CODE')->unsigned();
			$table->string('COAID', 15)->default('');
			$table->string('COADesc', 80)->nullable()->index('coa_ACCTTITLE');
			$table->integer('COAacct_type')->nullable()->index('coaACCT_TYPE');
			$table->string('COAacct_tag', 1)->nullable()->index('coaACCT_LVL');
			$table->string('COAacct_tag2', 1)->nullable();
			$table->string('COAacct_tag3', 1)->nullable();
			$table->string('COAacct_lvl', 1)->nullable();
			$table->string('COAacct_sum', 15)->nullable();
			$table->string('COAdept', 2)->nullable();
			$table->string('COAacct_grp', 2)->nullable();
			$table->decimal('COAcls_entry', 14)->nullable();
			$table->dateTime('COAcle_date')->nullable();
			$table->string('COAconso_acct', 15)->nullable();
			$table->smallInteger('COAUpdUser')->unsigned()->nullable()->index('coaACCESSID');
			$table->dateTime('COAupdDateTime')->nullable();
			$table->boolean('COABALTYPE')->nullable()->index('coaBALTYPE');
			$table->integer('COAglaccttype')->nullable()->index('FK_coa_GLACCTTYPE');
			$table->decimal('COAseqno', 15, 3)->nullable();
			$table->boolean('COAisdisabled')->nullable();
			$table->boolean('COAcanGLOnly')->nullable()->default(1);
			$table->primary(['COABR_CODE','COAID']);
			$table->index(['COABR_CODE','COAacct_sum','COAID'], 'coa_ACCTSUM1');
			$table->index(['COABR_CODE','COAacct_type','COAID'], 'coa_ACCTTYPE1');
			$table->index(['COABR_CODE','COAacct_sum','COADesc'], 'coa_ACCTSUM2');
			$table->index(['COABR_CODE','COAacct_type','COADesc'], 'coa_ACCTTYPE2');
			$table->index(['COABR_CODE','COAacct_grp','COAID'], 'coa_ACCTGRP');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('coa');
	}

}
