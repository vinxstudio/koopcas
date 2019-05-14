<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIndCodeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ind_code', function(Blueprint $table)
		{
			$table->smallInteger('Ind_CodeID', true)->unsigned();
			$table->string('Ind_CodeDesc', 200);
			$table->string('Ind_Code', 15);
			$table->smallInteger('Ind_CodeBR_CODE')->unsigned()->index('FK_ind_industry_BRCODE');
			$table->smallInteger('Ind_DivisionID')->unsigned()->index('FK_IND_DIVISION_ID');
			$table->primary(['Ind_CodeID','Ind_Code','Ind_DivisionID','Ind_CodeBR_CODE']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ind_code');
	}

}
