<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCbrefTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cbref', function(Blueprint $table)
		{
			$table->increments('CBRefID');
			$table->smallInteger('CBRefBR_CODE')->unsigned();
			$table->integer('ClientIDCBRef')->unsigned()->nullable()->default(0);
			$table->boolean('CBRefType')->nullable()->index('FK_cbref_2');
			$table->string('CBRefName', 45)->nullable();
			$table->date('CBRefDateAcctOpened')->nullable();
			$table->decimal('CBRefPrincipalAmount', 15)->nullable();
			$table->decimal('CBRefLoanBalance', 15)->nullable();
			$table->string('CBRefAddress', 45)->nullable();
			$table->string('CBRefTelNum', 45)->nullable();
			$table->dateTime('CBRefDateTimeAdded')->nullable();
			$table->index(['CBRefBR_CODE','ClientIDCBRef'], 'FK_cbref_1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cbref');
	}

}
