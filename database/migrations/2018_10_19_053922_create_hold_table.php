<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHoldTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hold', function(Blueprint $table)
		{
			$table->smallInteger('HBR_CODE')->unsigned();
			$table->boolean('HSLC_CODE');
			$table->boolean('HSLT_CODE');
			$table->integer('HREF_NO')->unsigned();
			$table->integer('ClientIDH')->unsigned();
			$table->decimal('HHELD_AMT', 15);
			$table->boolean('HHOLD_CODE')->index('h_HOLDCODE');
			$table->index(['HBR_CODE','ClientIDH'], 'h_CLIENTID');
			$table->index(['HBR_CODE','HSLC_CODE','HSLT_CODE','HREF_NO','ClientIDH'], 'h_SLCTREFNO');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hold');
	}

}
