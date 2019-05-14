<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFusioActionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fusio_action', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('status')->default(1);
			$table->string('name');
			$table->string('class');
			$table->string('engine')->nullable();
			$table->binary('config')->nullable();
			$table->dateTime('date');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fusio_action');
	}

}
