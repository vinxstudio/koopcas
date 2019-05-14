<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIndSectionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ind_section', function(Blueprint $table)
		{
			$table->smallInteger('Ind_SectionID', true)->unsigned();
			$table->string('Ind_SectionDesc', 200);
			$table->smallInteger('Ind_SectionBR_CODE')->unsigned()->index('FK_ind_section_BRCODE');
			$table->primary(['Ind_SectionID','Ind_SectionBR_CODE']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ind_section');
	}

}
