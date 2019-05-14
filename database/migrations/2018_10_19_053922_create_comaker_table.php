<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComakerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comaker', function(Blueprint $table)
		{
			$table->smallInteger('CoMakerBR_CODE')->unsigned();
			$table->integer('CoMakerClientID')->unsigned()->nullable()->comment('Client ID of the Co-Maker');
			$table->boolean('CoMakerSLC_CODE');
			$table->boolean('CoMakerSLT_CODE');
			$table->integer('CoMakerREF_NO')->unsigned();
			$table->integer('ClientIDCoMaker')->unsigned()->comment('Client ID of the Loan Setup');
			$table->string('CoMakerClientName', 250)->nullable();
			$table->string('CoMakerAddress1', 250)->nullable();
			$table->string('CoMakerAddress2', 250)->nullable();
			$table->increments('ID');
			$table->index(['CoMakerBR_CODE','ClientIDCoMaker'], 'comaker_CLIENTID');
			$table->index(['CoMakerBR_CODE','CoMakerClientID'], 'comaker_CLIENTIDCOMAKER');
			$table->index(['CoMakerBR_CODE','CoMakerSLC_CODE','CoMakerSLT_CODE','CoMakerREF_NO','ClientIDCoMaker'], 'comaker_CTR');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('comaker');
	}

}
