<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransckTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transck', function(Blueprint $table)
		{
			$table->smallInteger('CKTR_BRCODE')->unsigned();
			$table->smallInteger('CKTR_YEAR')->unsigned();
			$table->boolean('CKTR_MODULE');
			$table->boolean('CKTR_CODE');
			$table->integer('CKTR_CTLNO')->unsigned();
			$table->boolean('CKSEQ_NO');
			$table->boolean('CKCOCI_TYPE')->nullable()->index('transck_COCITYPE');
			$table->boolean('CKCHECKTYPE')->nullable()->index('transck_CHECKTYPE');
			$table->boolean('CKCLRG_DAYS')->nullable();
			$table->string('CKCHECKNO', 20)->nullable();
			$table->smallInteger('CKBANK_CODE')->unsigned()->nullable();
			$table->date('CKCHECKDATE')->nullable();
			$table->decimal('CKAMT', 15)->nullable();
			$table->boolean('CKUPD_TAG')->nullable()->index('transck_UPDTAG');
			$table->date('CKCLR_DATE')->nullable();
			$table->smallInteger('CKENCDBY')->unsigned()->nullable()->index('transck_ENCDBY');
			$table->smallInteger('CKAPPRVBY')->unsigned()->nullable()->index('transck_APPRBY');
			$table->smallInteger('CKPOSTBY')->unsigned()->nullable()->index('transck_POSTBY');
			$table->boolean('CKISCLEARED')->nullable()->default(0);
			$table->primary(['CKTR_BRCODE','CKTR_YEAR','CKTR_MODULE','CKTR_CODE','CKTR_CTLNO','CKSEQ_NO']);
			$table->index(['CKTR_BRCODE','CKTR_CODE','CKTR_CTLNO','CKTR_YEAR'], 'transck_CTLNUM2');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('transck');
	}

}
