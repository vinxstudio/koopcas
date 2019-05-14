<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFusioRoutesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fusio_routes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('status')->default(1);
			$table->integer('priority')->nullable()->index('IDX_8130B00B62A6DC27');
			$table->string('methods', 64);
			$table->string('path');
			$table->string('controller');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fusio_routes');
	}

}
