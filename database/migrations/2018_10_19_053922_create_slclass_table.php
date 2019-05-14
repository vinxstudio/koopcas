<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSlclassTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('slclass', function(Blueprint $table)
		{
			$table->boolean('SLClassID')->primary();
			$table->string('SLClassDesc', 45);
			$table->string('SLClassDummy', 45)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('slclass');
	}

}
