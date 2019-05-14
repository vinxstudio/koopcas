<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIndSectionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ind_section', function(Blueprint $table)
		{
			$table->foreign('Ind_SectionBR_CODE', 'FK_ind_section_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ind_section', function(Blueprint $table)
		{
			$table->dropForeign('FK_ind_section_BRCODE');
		});
	}

}
