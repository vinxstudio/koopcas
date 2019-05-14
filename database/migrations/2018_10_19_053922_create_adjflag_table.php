<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdjflagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('adjflag', function(Blueprint $table)
		{
			$table->boolean('ADJFLAGID')->primary();
			$table->string('ADJFLAGDesc', 15);
			$table->string('ADJFLAGCode', 1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('adjflag');
	}

}
