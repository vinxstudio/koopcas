<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLoansubtypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('loansubtype', function(Blueprint $table)
		{
			$table->smallInteger('BR_CODE')->unsigned();
			$table->boolean('ID');
			$table->string('M_DESC', 45);
			$table->primary(['BR_CODE','ID']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('loansubtype');
	}

}
