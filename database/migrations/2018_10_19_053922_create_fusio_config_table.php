<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFusioConfigTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fusio_config', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('type')->default(1);
			$table->string('name', 64)->unique('UNIQ_676F5DC45E237E06');
			$table->string('description');
			$table->string('value');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fusio_config');
	}

}
