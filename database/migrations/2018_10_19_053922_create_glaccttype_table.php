<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGlaccttypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('glaccttype', function(Blueprint $table)
		{
			$table->integer('GLAcctTypeID')->default(0)->primary();
			$table->string('GLAcctTypeDesc', 45);
			$table->string('Remarks', 100);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('glaccttype');
	}

}
