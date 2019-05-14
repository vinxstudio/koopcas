<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ar', function(Blueprint $table)
		{
			$table->smallInteger('ARBR_CODE')->unsigned();
			$table->boolean('ARSLC_CODE');
			$table->boolean('ARSLT_CODE');
			$table->integer('ARREF_NO')->unsigned();
			$table->integer('ClientIDAR')->unsigned();
			$table->boolean('ARCLASS')->nullable()->index('ar_ARCLASS');
			$table->boolean('ARPURPOSE')->nullable()->index('ar_PURPOSE');
			$table->decimal('ARPAMT', 15)->nullable();
			$table->boolean('ARSTATUS')->nullable()->index('ar_STATUS');
			$table->decimal('ARENCUMB', 15)->nullable();
			$table->date('ARTR_DATE')->nullable();
			$table->integer('ARTERMS')->unsigned()->nullable();
			$table->boolean('ARTERM_PERD')->nullable()->index('ar_TERM_PERD');
			$table->boolean('ARPPMT_MODE')->nullable()->index('ar_PPMT_MODE');
			$table->integer('ARPPMT_MFAC')->unsigned()->nullable();
			$table->boolean('ARPPMT_MOD2')->nullable()->index('ar_PPMT_MOD2');
			$table->decimal('ARINT_RATE', 5)->unsigned()->nullable();
			$table->boolean('ARAMORTYPE')->nullable()->index('ar_AMORTYPE');
			$table->boolean('ARDIMB_FREQ')->nullable()->index('ar_DIMB_FREQ');
			$table->boolean('ARIPMT_MODE')->nullable()->index('ar_IPMT_MODE');
			$table->integer('ARIPMT_MFAC')->unsigned()->nullable();
			$table->boolean('ARIPMT_MOD2')->nullable()->index('ar_IPMT_MOD2');
			$table->decimal('ARPEN_RATE', 5)->unsigned()->nullable();
			$table->boolean('ARPEN_MODE')->nullable()->index('ar_PEN_MODE');
			$table->integer('ARPEN_MFAC')->unsigned()->nullable();
			$table->boolean('ARPEN_MOD2')->nullable()->index('ar_PEN_MOD2');
			$table->boolean('ARDD_FLAG')->nullable()->index('ar_DD_FLAG');
			$table->integer('ARINT_GP')->unsigned()->nullable();
			$table->integer('ARPRIN_GP')->unsigned()->nullable();
			$table->date('ARFID_DATE')->nullable();
			$table->date('ARFPD_DATE')->nullable();
			$table->date('ARMAT_DATE')->nullable();
			$table->boolean('ARND_FLAG')->nullable()->index('ar_ND_FLAG');
			$table->string('ARXXREF_NO', 30)->nullable()->index('ar_ARXXREFNO');
			$table->date('ARDISSUED')->nullable();
			$table->decimal('ARCRLIMIT', 15)->nullable();
			$table->boolean('ARMCLASS')->nullable()->index('ar_MCLASS');
			$table->string('ARACCTOFF', 10)->nullable();
			$table->boolean('ARRESTRUCT')->nullable();
			$table->boolean('ARXSLT_CODE')->nullable();
			$table->integer('ARXREF_NO')->unsigned()->nullable();
			$table->boolean('ARCOLLTYPE')->nullable()->index('ar_COLLTYPE');
			$table->decimal('ARCOLLAMT', 15)->nullable();
			$table->text('ARCOLLDESC')->nullable();
			$table->text('ARRemarks')->nullable();
			$table->dateTime('ARUPDDATETIME')->nullable();
			$table->smallInteger('ARUpdUser')->unsigned()->nullable()->index('ar_UPDUSER');
			$table->decimal('ARCBUAMT', 15)->nullable();
			$table->decimal('ARSAVAMT', 15)->nullable();
			$table->string('ARCI', 10)->nullable();
			$table->smallInteger('ARPENGP')->unsigned()->nullable()->default(30);
			$table->smallInteger('ARPREPAIDPYMTS')->unsigned()->nullable();
			$table->boolean('ARISDISTRIBUTEUNPAIDINT')->nullable()->default(0);
			$table->string('ARCOLLECTOR', 10)->nullable();
			$table->decimal('ARPAMT2', 15)->nullable()->default(0.00);
			$table->boolean('ARCOLLECTTYPE')->nullable()->index('FK_ar_COLLECTTYPE');
			$table->decimal('ARCOLLFEE', 15)->nullable();
			$table->primary(['ARBR_CODE','ARSLC_CODE','ARSLT_CODE','ARREF_NO','ClientIDAR']);
			$table->index(['ARBR_CODE','ClientIDAR'], 'ar_CLIENTID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ar');
	}

}
