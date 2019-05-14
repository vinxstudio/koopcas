<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFusioCronjobTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fusio_cronjob', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('status')->default(1);
			$table->string('name', 64)->unique('UNIQ_60D3A2465E237E06');
			$table->string('cron');
			$table->integer('action')->nullable();
			$table->dateTime('executeDate')->nullable();
			$table->integer('exitCode')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fusio_cronjob');
	}

}
