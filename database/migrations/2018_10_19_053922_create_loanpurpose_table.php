<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLoanpurposeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('loanpurpose', function(Blueprint $table)
		{
			$table->boolean('LoanPurposeID')->primary();
			$table->string('LoanPurposeDesc', 45);
			$table->boolean('LoanPurposeType')->default(1)->index('FK_loanpurpose_TYPE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('loanpurpose');
	}

}
