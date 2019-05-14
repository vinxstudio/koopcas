<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFusioLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fusio_log', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('routeId')->nullable();
			$table->integer('appId')->nullable();
			$table->integer('userId')->nullable();
			$table->string('ip', 40);
			$table->string('userAgent');
			$table->string('method', 16);
			$table->string('path', 1023);
			$table->text('header');
			$table->text('body')->nullable();
			$table->integer('executionTime')->nullable();
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
		Schema::drop('fusio_log');
	}

}
