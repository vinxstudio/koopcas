<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTranstypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transtype', function(Blueprint $table)
		{
			$table->boolean('TransTypeID')->primary();
			$table->string('TransTypeDesc', 45);
			$table->string('TransTypeDesc2', 4);
			$table->string('TransTypeModule', 3);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('transtype');
	}

}
