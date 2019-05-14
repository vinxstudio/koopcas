<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCisaPsiccodeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cisa_psiccode', function(Blueprint $table)
		{
			$table->integer('PSIC_Code')->unsigned();
			$table->string('PSIC_Desc')->default('');
			$table->smallInteger('PSIC_BR_CODE')->unsigned()->index('fk_PSIC_BRCODE');
			$table->char('PSIC_SectorCode', 10)->index('fk_PSIC_SectorCode');
			$table->primary(['PSIC_Code','PSIC_BR_CODE','PSIC_SectorCode']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cisa_psiccode');
	}

}
