<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTdTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('td', function(Blueprint $table)
		{
			$table->smallInteger('TDBR_CODE')->unsigned();
			$table->boolean('TDSLC_CODE');
			$table->boolean('TDSLT_CODE');
			$table->integer('TDREF_NO')->unsigned();
			$table->integer('ClientIDTD')->unsigned();
			$table->date('TDTR_DATE')->nullable();
			$table->boolean('TDSTATUS')->nullable()->index('td_STATUS');
			$table->decimal('TDINT_RATE', 5)->unsigned()->nullable();
			$table->integer('TDTERMS')->unsigned()->nullable();
			$table->boolean('TDTERM_PERD')->nullable()->index('td_TERM_PERD');
			$table->date('TDMAT_DATE')->nullable();
			$table->string('TDCERT_NUM', 30)->nullable();
			$table->dateTime('TDUPDDATETIME')->nullable();
			$table->text('TDREMARKS')->nullable();
			$table->smallInteger('TDUpdUser')->unsigned()->nullable()->index('td_UPDUSER');
			$table->boolean('TDRO_SLC_CODE')->nullable();
			$table->boolean('TDRO_SLT_CODE')->nullable();
			$table->string('TDRO_ACCTCODE', 15)->nullable();
			$table->primary(['TDBR_CODE','TDSLC_CODE','TDSLT_CODE','TDREF_NO','ClientIDTD']);
			$table->index(['TDBR_CODE','ClientIDTD'], 'td_CLIENTID');
			$table->index(['TDBR_CODE','TDRO_SLC_CODE','TDRO_SLT_CODE'], 'FK_td_ROSLCT_CODE');
			$table->index(['TDBR_CODE','TDRO_ACCTCODE'], 'FK_td_TDRO_ACCTCODE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('td');
	}

}
