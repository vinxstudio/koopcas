<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIndDivisionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ind_division', function(Blueprint $table)
		{
			$table->foreign('Ind_SectionID', 'FK_IND_SECTION_ID')->references('Ind_SectionID')->on('ind_section')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('Ind_DivisionBR_CODE', 'FK_ind_division_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ind_division', function(Blueprint $table)
		{
			$table->dropForeign('FK_IND_SECTION_ID');
			$table->dropForeign('FK_ind_division_BRCODE');
		});
	}

}
