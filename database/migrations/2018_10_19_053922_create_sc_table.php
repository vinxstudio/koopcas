<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateScTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sc', function(Blueprint $table)
		{
			$table->smallInteger('SCBR_CODE')->unsigned();
			$table->boolean('SCSLC_CODE');
			$table->boolean('SCSLT_CODE');
			$table->integer('SCREF_NO')->unsigned();
			$table->integer('ClientIDSC')->unsigned();
			$table->date('SCTR_DATE')->nullable();
			$table->boolean('SCSTATUS')->nullable()->index('sc_STATUS');
			$table->decimal('SCMIN_BAL', 15)->unsigned()->nullable();
			$table->dateTime('SCUPDDATETIME')->nullable();
			$table->text('SCREMARKS')->nullable();
			$table->smallInteger('SCUpdUser')->unsigned()->nullable()->index('sc_UPDUSER');
			$table->primary(['SCBR_CODE','SCSLC_CODE','SCSLT_CODE','SCREF_NO','ClientIDSC']);
			$table->index(['SCBR_CODE','ClientIDSC'], 'sc_CLIENTID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sc');
	}

}
