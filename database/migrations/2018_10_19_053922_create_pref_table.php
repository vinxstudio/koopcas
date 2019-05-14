<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrefTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pref', function(Blueprint $table)
		{
			$table->increments('PRefID');
			$table->smallInteger('PRefBR_CODE')->unsigned();
			$table->integer('ClientIDPRef')->unsigned()->default(0);
			$table->string('PRefName', 45)->default('');
			$table->string('PRefAddress', 45)->nullable();
			$table->string('PRefTelNum', 45)->nullable();
			$table->boolean('PRefRelation')->index('FK_pref_2');
			$table->text('PRefRemarks', 65535)->nullable();
			$table->dateTime('PRefDateTimeAdded');
			$table->index(['PRefBR_CODE','ClientIDPRef'], 'FK_personalreferences_1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pref');
	}

}
