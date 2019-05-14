<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFusioAppTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fusio_app', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('userId')->index('IDX_6198B1E564B64DCC');
			$table->integer('status');
			$table->string('name', 64);
			$table->string('url');
			$table->string('parameters')->nullable();
			$table->string('appKey')->unique('UNIQ_6198B1E5AD1B0954');
			$table->string('appSecret');
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
		Schema::drop('fusio_app');
	}

}
