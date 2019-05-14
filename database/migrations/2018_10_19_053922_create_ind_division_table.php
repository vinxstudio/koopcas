<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIndDivisionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ind_division', function(Blueprint $table)
		{
			$table->smallInteger('Ind_DivisionID', true)->unsigned();
			$table->string('Ind_DivisionDesc', 200);
			$table->smallInteger('Ind_DivisionBR_CODE')->unsigned()->index('FK_ind_division_BRCODE');
			$table->smallInteger('Ind_SectionID')->unsigned()->index('FK_IND_SECTION_ID');
			$table->primary(['Ind_DivisionID','Ind_SectionID','Ind_DivisionBR_CODE']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ind_division');
	}

}
