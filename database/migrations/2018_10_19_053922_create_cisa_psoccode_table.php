<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCisaPsoccodeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cisa_psoccode', function(Blueprint $table)
		{
			$table->integer('PSOC_Code')->unsigned();
			$table->string('PSOC_Desc')->default('');
			$table->smallInteger('PSOC_BR_CODE')->unsigned()->index('fk_PSOCBRCODE');
			$table->integer('PSOC_DivisionCode')->unsigned()->index('fk_div_CODE');
			$table->primary(['PSOC_Code','PSOC_BR_CODE','PSOC_DivisionCode']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cisa_psoccode');
	}

}
