<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLoandeducgroupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('loandeducgroup', function(Blueprint $table)
		{
			$table->smallInteger('LoanDeducGroupID', true)->unsigned();
			$table->string('LoanDeducGroupDesc', 45);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('loandeducgroup');
	}

}
