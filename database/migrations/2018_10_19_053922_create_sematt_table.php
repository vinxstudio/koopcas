<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSemattTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sematt', function(Blueprint $table)
		{
			$table->increments('SemAttID');
			$table->smallInteger('SemAttBR_CODE')->unsigned();
			$table->integer('ClientIDSA')->unsigned()->default(0);
			$table->smallInteger('SemCondIDSA')->unsigned()->default(0)->index('semattSEMCOND');
			$table->index(['SemAttBR_CODE','ClientIDSA'], 'FK_seminarsattended_1');
			$table->index(['SemAttBR_CODE','SemCondIDSA'], 'FK_seminarsattended_2');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sematt');
	}

}
