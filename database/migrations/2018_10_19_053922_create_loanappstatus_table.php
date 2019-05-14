<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLoanappstatusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('loanappstatus', function(Blueprint $table)
		{
			$table->boolean('ID')->primary();
			$table->string('M_DESC', 45);
			$table->string('M_DESC2', 45);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('loanappstatus');
	}

}
