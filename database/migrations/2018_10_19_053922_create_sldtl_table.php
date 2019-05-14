<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSldtlTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sldtl', function(Blueprint $table)
		{
			$table->smallInteger('SL_BRCODE')->unsigned();
			$table->integer('SL_CLIENTID')->unsigned();
			$table->boolean('SLC_CODE');
			$table->boolean('SLT_CODE');
			$table->integer('REF_NO')->unsigned();
			$table->boolean('SLE_CODE')->index('SLDTL_SLE');
			$table->date('TR_DATE')->index('SLDTL_TRDATE');
			$table->integer('SEQNO')->unsigned();
			$table->date('GL_DATE')->nullable()->index('SLDTL_GLDATE');
			$table->boolean('TR_CODE')->index('SLDTL_TRCODE');
			$table->string('TR_CTLNO2', 8)->nullable();
			$table->integer('TR_CTLNO')->unsigned()->nullable();
			$table->string('TR_DOCNO', 20)->nullable();
			$table->decimal('AMT', 15)->nullable();
			$table->boolean('ADJ_FLAG')->nullable()->index('SLDTL_ADJFLAG');
			$table->boolean('COCI_TYPE')->nullable()->index('SLDTL_COCITYPE');
			$table->boolean('CLRG_DAYS')->nullable();
			$table->string('CHECKNO', 20)->nullable();
			$table->smallInteger('BANK_CODE')->unsigned()->nullable()->index('SLDTL_BANKCODE');
			$table->primary(['SL_BRCODE','SL_CLIENTID','SLC_CODE','SLT_CODE','REF_NO','SLE_CODE','TR_DATE','SEQNO']);
			$table->index(['SL_BRCODE','TR_CODE','TR_CTLNO'], 'SLDTL_index_TRANS');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sldtl');
	}

}
