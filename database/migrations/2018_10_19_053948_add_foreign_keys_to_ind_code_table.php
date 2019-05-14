<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIndCodeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ind_code', function(Blueprint $table)
		{
			$table->foreign('Ind_DivisionID', 'FK_IND_DIVISION_ID')->references('Ind_DivisionID')->on('ind_division')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('Ind_CodeBR_CODE', 'FK_ind_industry_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ind_code', function(Blueprint $table)
		{
			$table->dropForeign('FK_IND_DIVISION_ID');
			$table->dropForeign('FK_ind_industry_BRCODE');
		});
	}

}
