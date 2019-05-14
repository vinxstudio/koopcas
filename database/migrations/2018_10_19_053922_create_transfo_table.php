<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transfo', function(Blueprint $table)
		{
			$table->smallInteger('FOTR_BRCODE')->unsigned();
			$table->smallInteger('FOTR_YEAR')->unsigned();
			$table->boolean('FOTR_MODULE');
			$table->boolean('FOTR_CODE');
			$table->integer('FOTR_CTLNO')->unsigned();
			$table->boolean('FOSEQ_NO');
			$table->boolean('FODEPT')->nullable();
			$table->string('FOACCT_CODE', 15)->nullable();
			$table->integer('ClientIDFO')->unsigned()->nullable();
			$table->string('ClientIDFONA', 8)->nullable();
			$table->boolean('FOSLC_CODE')->nullable();
			$table->boolean('FOSLT_CODE')->nullable();
			$table->integer('FOREF_NO')->unsigned()->nullable();
			$table->boolean('FOSLE_CODE')->nullable()->index('transfo_SLE_CODE');
			$table->boolean('FOCTS_NUM')->nullable()->index('transfo_CTS_NUM');
			$table->date('FOSL_DATE')->nullable();
			$table->boolean('FOADJ_FLAG')->nullable()->index('transfo_ADJFLAG');
			$table->boolean('FOCOCI_TYPE')->nullable()->index('transfo_COCITYPE');
			$table->decimal('FOAMT', 15)->nullable();
			$table->smallInteger('FOENCDBY')->unsigned()->nullable()->index('transfo_ENCDBY');
			$table->smallInteger('FOAPPRVBY')->unsigned()->nullable()->index('transfo_APPRBY');
			$table->smallInteger('FOPOSTBY')->unsigned()->nullable()->index('transfo_POSTBY');
			$table->boolean('FOUPD_TAG')->nullable()->index('transfo_UPDTAG');
			$table->boolean('FOSLE_CODE2')->nullable();
			$table->boolean('FOCTS_NUM2')->nullable();
			$table->primary(['FOTR_BRCODE','FOTR_YEAR','FOTR_MODULE','FOTR_CODE','FOTR_CTLNO','FOSEQ_NO']);
			$table->index(['FOTR_BRCODE','FOACCT_CODE'], 'transfo_ACCT_CODE');
			$table->index(['FOTR_BRCODE','ClientIDFO'], 'transfo_CLIENTID');
			$table->index(['FOTR_BRCODE','FOSLC_CODE','FOSLT_CODE','FOREF_NO'], 'transfo_SLCTREFNO');
			$table->index(['FOTR_BRCODE','FOTR_CODE','FOTR_CTLNO','FOTR_YEAR'], 'transfo_CTLNUM2');
			$table->index(['FOTR_BRCODE','FOSLC_CODE','FOSLT_CODE','FOREF_NO','ClientIDFO'], 'transfo_SLCTREFNOCLIENTID');
			$table->index(['FOTR_BRCODE','FOSLC_CODE','FOSLT_CODE','FOSLE_CODE','FOCTS_NUM'], 'transfo_SL_CTECTS');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('transfo');
	}

}
