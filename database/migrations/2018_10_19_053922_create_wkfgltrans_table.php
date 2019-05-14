<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWkfgltransTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wkfgltrans', function(Blueprint $table)
		{
			$table->smallInteger('GLTransBR_CODE')->unsigned()->index('gltrans_BR_CODE');
			$table->string('GLTransACCT_CODE', 15)->default('');
			$table->date('GLTransTR_DATE')->default('0000-00-00');
			$table->boolean('GLTransTR_CODE')->default(0)->index('gltrans_TR_CODE');
			$table->boolean('GLTransDEPT')->default(1)->index('FK_gltrans_DEPT');
			$table->decimal('GLTransDR_AMT', 15)->nullable()->default(0.00);
			$table->decimal('GLTransCR_AMT', 15)->nullable()->default(0.00);
			$table->decimal('GLTransDR_BALB4', 15)->nullable();
			$table->decimal('GLTransCR_BALB4', 15)->nullable();
			$table->decimal('GLTransSUM_BALB4', 15)->nullable();
			$table->primary(['GLTransBR_CODE','GLTransACCT_CODE','GLTransTR_DATE','GLTransTR_CODE','GLTransDEPT']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wkfgltrans');
	}

}
