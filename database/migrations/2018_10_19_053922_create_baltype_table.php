<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBaltypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('baltype', function(Blueprint $table)
		{
			$table->boolean('BalTypeID')->primary();
			$table->string('BalTypeDesc', 45);
			$table->string('BalTypeRemarks', 200);
			$table->boolean('BalTypeIsDebit')->default(1);
			$table->string('BalTypeCutDate', 200)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('baltype');
	}

}
