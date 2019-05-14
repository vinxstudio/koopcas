<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSdTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sd', function(Blueprint $table)
		{
			$table->smallInteger('SDBR_CODE')->unsigned();
			$table->boolean('SDSLC_CODE');
			$table->boolean('SDSLT_CODE');
			$table->integer('SDREF_NO')->unsigned();
			$table->integer('ClientIDSD')->unsigned();
			$table->date('SDTR_DATE')->nullable();
			$table->boolean('SDSTATUS')->nullable()->index('sd_STATUS');
			$table->decimal('SDMIN_BAL', 15)->unsigned()->nullable();
			$table->decimal('SDINT_RATE', 5)->unsigned()->nullable();
			$table->dateTime('SDUPDDATETIME')->nullable();
			$table->text('SDREMARKS')->nullable();
			$table->smallInteger('SDUpdUser')->unsigned()->nullable()->index('sd_UPDUSER');
			$table->boolean('SDSAVCLASS')->nullable();
			$table->primary(['SDBR_CODE','SDSLC_CODE','SDSLT_CODE','SDREF_NO','ClientIDSD']);
			$table->index(['SDBR_CODE','ClientIDSD'], 'sd_CLIENTID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sd');
	}

}
