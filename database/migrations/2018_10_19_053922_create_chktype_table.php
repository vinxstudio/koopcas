<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChktypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chktype', function(Blueprint $table)
		{
			$table->boolean('ChkTypeID')->primary();
			$table->string('ChkTypeDesc', 30);
			$table->string('ChkTypeDesc2', 45)->nullable();
			$table->boolean('ChkTypeDays')->default(0);
			$table->string('ShortCutKey', 1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('chktype');
	}

}
