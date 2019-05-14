<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ap', function(Blueprint $table)
		{
			$table->smallInteger('APBR_CODE')->unsigned();
			$table->boolean('APSLC_CODE');
			$table->boolean('APSLT_CODE');
			$table->integer('APREF_NO')->unsigned();
			$table->integer('ClientIDAP')->unsigned();
			$table->decimal('APPAMT', 15)->nullable();
			$table->boolean('APSTATUS')->nullable()->index('ap_STATUS');
			$table->date('APTR_DATE')->nullable();
			$table->integer('APTERMS')->unsigned()->nullable();
			$table->boolean('APTERM_PERD')->nullable()->index('ap_TERM_PERD');
			$table->boolean('APPPMT_MODE')->nullable()->index('ap_PPMT_MODE');
			$table->integer('APPPMT_MFAC')->unsigned()->nullable();
			$table->boolean('APPPMT_MOD2')->nullable()->index('ap_PPMT_MOD2');
			$table->boolean('APDD_FLAG')->nullable()->index('ap_DD_FLAG');
			$table->date('APFPD_DATE')->nullable();
			$table->date('APMAT_DATE')->nullable();
			$table->decimal('APAMORTZN', 15)->nullable();
			$table->text('APRemarks')->nullable();
			$table->dateTime('APUPDDATETIME')->nullable();
			$table->smallInteger('APUpdUser')->unsigned()->nullable()->index('ap_UPDUSER');
			$table->boolean('APLSLC_CODE')->nullable();
			$table->boolean('APLSLT_CODE')->nullable();
			$table->integer('APLREF_NO')->unsigned()->nullable();
			$table->primary(['APBR_CODE','APSLC_CODE','APSLT_CODE','APREF_NO','ClientIDAP']);
			$table->index(['APBR_CODE','ClientIDAP'], 'ap_CLIENTID');
			$table->index(['APBR_CODE','APLSLC_CODE','APLSLT_CODE','APLREF_NO','ClientIDAP'], 'ap_LSLCTREFNO');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ap');
	}

}
