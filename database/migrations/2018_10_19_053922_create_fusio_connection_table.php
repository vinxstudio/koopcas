<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFusioConnectionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fusio_connection', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('status')->default(1);
			$table->string('name')->unique('UNIQ_D7254CB25E237E06');
			$table->string('class');
			$table->binary('config')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fusio_connection');
	}

}
