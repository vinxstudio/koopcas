<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFusioUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fusio_user', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('provider')->default(1);
			$table->integer('status');
			$table->string('remoteId')->nullable();
			$table->string('name', 64)->unique('UNIQ_5680E95E5E237E06');
			$table->string('email', 128)->nullable()->unique('UNIQ_5680E95EE7927C74');
			$table->string('password')->nullable();
			$table->dateTime('date');
			$table->unique(['provider','remoteId'], 'UNIQ_5680E95E92C4739C3CF4B9D3');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fusio_user');
	}

}
