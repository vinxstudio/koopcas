<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFusioAppCodeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fusio_app_code', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('appId');
			$table->integer('userId');
			$table->string('code')->unique('UNIQ_E02C927D77153098');
			$table->string('redirectUri')->nullable();
			$table->string('scope');
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
		Schema::drop('fusio_app_code');
	}

}
