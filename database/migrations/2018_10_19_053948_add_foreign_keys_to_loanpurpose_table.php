<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLoanpurposeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('loanpurpose', function(Blueprint $table)
		{
			$table->foreign('LoanPurposeType', 'FK_loanpurpose_TYPE')->references('LoanClassID')->on('loanclass')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('loanpurpose', function(Blueprint $table)
		{
			$table->dropForeign('FK_loanpurpose_TYPE');
		});
	}

}
