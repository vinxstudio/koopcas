<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCivilstatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('civilstat', function(Blueprint $table)
		{
			$table->boolean('CivilStatID')->primary();
			$table->string('CivilStatDesc', 45)->default('');
			$table->boolean('CISAcivilStatCode');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('civilstat');
	}

}
