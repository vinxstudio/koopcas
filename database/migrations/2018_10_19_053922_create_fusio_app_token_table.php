<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFusioAppTokenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fusio_app_token', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('appId')->index('IDX_8FC08E6E36DA3021');
			$table->integer('userId')->index('IDX_8FC08E6E64B64DCC');
			$table->integer('status')->default(1);
			$table->string('token')->unique('UNIQ_8FC08E6E5F37A13B');
			$table->string('refresh')->nullable();
			$table->string('scope');
			$table->string('ip', 40);
			$table->dateTime('expire')->nullable();
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
		Schema::drop('fusio_app_token');
	}

}
