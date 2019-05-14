<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFusioLogErrorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fusio_log_error', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('logId');
			$table->string('message', 500);
			$table->text('trace');
			$table->string('file');
			$table->integer('line');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fusio_log_error');
	}

}
