<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOslTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('osl', function(Blueprint $table)
		{
			$table->smallInteger('OSLBR_CODE')->unsigned();
			$table->boolean('OSLSLC_CODE');
			$table->boolean('OSLSLT_CODE');
			$table->integer('OSLREF_NO')->unsigned();
			$table->integer('ClientIDOSL')->unsigned();
			$table->date('OSLTR_DATE')->nullable();
			$table->boolean('OSLSTATUS')->nullable()->index('osl_STATUS');
			$table->decimal('OSLPAMT', 15)->nullable();
			$table->dateTime('OSLUPDDATETIME')->nullable();
			$table->text('OSLREMARKS')->nullable();
			$table->smallInteger('OSLUpdUser')->unsigned()->nullable()->index('osl_UPDUSER');
			$table->primary(['OSLBR_CODE','OSLSLC_CODE','OSLSLT_CODE','OSLREF_NO','ClientIDOSL']);
			$table->index(['OSLBR_CODE','ClientIDOSL'], 'osl_CLIENTID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('osl');
	}

}
