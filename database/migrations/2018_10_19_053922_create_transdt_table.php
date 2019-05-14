<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransdtTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transdt', function(Blueprint $table)
		{
			$table->smallInteger('DTTR_BRCODE')->unsigned();
			$table->smallInteger('DTTR_YEAR')->unsigned();
			$table->boolean('DTTR_MODULE');
			$table->boolean('DTTR_CODE');
			$table->integer('DTTR_CTLNO')->unsigned();
			$table->smallInteger('DTSEQ_NO')->unsigned();
			$table->boolean('DTDEPT')->nullable()->index('transdt_DEPT');
			$table->string('DTACCT_CODE', 15)->nullable();
			$table->integer('ClientIDDT')->unsigned()->nullable();
			$table->string('ClientIDDTNA', 8)->nullable();
			$table->boolean('DTSLC_CODE')->nullable();
			$table->boolean('DTSLT_CODE')->nullable();
			$table->integer('DTREF_NO')->unsigned()->nullable();
			$table->boolean('DTSLE_CODE')->nullable()->index('transdt_SLE_CODE');
			$table->boolean('DTCTS_NUM')->nullable()->index('transdt_CTS_NUM');
			$table->date('DTSL_DATE')->nullable();
			$table->boolean('DTADJ_FLAG')->nullable()->index('transdt_ADJFLAG');
			$table->boolean('DTCOCI_TYPE')->nullable()->index('transdt_COCITYPE');
			$table->decimal('DTAMT', 15)->nullable();
			$table->decimal('DTAMTDUE', 15)->nullable();
			$table->smallInteger('DTENCDBY')->unsigned()->nullable()->index('transdt_ENCDBY');
			$table->smallInteger('DTAPPRVBY')->unsigned()->nullable()->index('transdt_APPRBY');
			$table->smallInteger('DTPOSTBY')->unsigned()->nullable()->index('transdt_POSTBY');
			$table->boolean('DTUPD_TAG')->nullable()->index('transdt_UPDTAG');
			$table->boolean('DTSLE_CODE2')->nullable();
			$table->boolean('DTCTS_NUM2')->nullable();
			$table->primary(['DTTR_BRCODE','DTTR_YEAR','DTTR_MODULE','DTTR_CODE','DTTR_CTLNO','DTSEQ_NO']);
			$table->index(['DTTR_BRCODE','DTACCT_CODE'], 'transdt_ACCT_CODE');
			$table->index(['DTTR_BRCODE','ClientIDDT'], 'transdt_CLIENTID');
			$table->index(['DTTR_BRCODE','DTSLC_CODE','DTSLT_CODE','DTREF_NO'], 'transdt_SLCTREFNO');
			$table->index(['DTTR_BRCODE','DTTR_CODE','DTTR_CTLNO','DTTR_YEAR'], 'transdt_CTLNUM2');
			$table->index(['DTTR_BRCODE','DTSLC_CODE','DTSLT_CODE','DTREF_NO','ClientIDDT'], 'transdt_SLCTREFNOCLIENTID');
			$table->index(['DTTR_BRCODE','DTSLC_CODE','DTSLT_CODE','DTSLE_CODE','DTCTS_NUM'], 'transdt_SL_CTECTS');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('transdt');
	}

}
