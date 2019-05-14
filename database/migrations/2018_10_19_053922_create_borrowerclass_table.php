<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBorrowerclassTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('borrowerclass', function(Blueprint $table)
		{
			$table->boolean('BorrowerClassID')->primary();
			$table->string('BorrowerClassDesc', 45);
			$table->string('BorrowerClassOLDID', 2);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('borrowerclass');
	}

}
