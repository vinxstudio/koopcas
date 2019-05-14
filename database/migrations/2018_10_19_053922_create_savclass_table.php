<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSavclassTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('savclass', function(Blueprint $table)
		{
			$table->boolean('SavClassID')->primary();
			$table->string('SavClassDesc', 45);
			$table->boolean('SavClassSLType');
			$table->decimal('SavClassAmount', 15)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('savclass');
	}

}
