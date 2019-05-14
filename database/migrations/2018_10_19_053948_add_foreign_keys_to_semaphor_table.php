<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSemaphorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('semaphor', function(Blueprint $table)
		{
			$table->foreign('semBR_CODE', 'FK_semaphor_BR_CODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('semBR_CODE', 'FK_semaphor_NETLOSS')->references('COABR_CODE')->on('coa')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('semBR_CODE', 'FK_semaphor_NETSURPLUS')->references('COABR_CODE')->on('coa')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('semBR_CODE', 'FK_semaphor_UNDNETSUR')->references('COABR_CODE')->on('coa')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('semaphor', function(Blueprint $table)
		{
			$table->dropForeign('FK_semaphor_BR_CODE');
			$table->dropForeign('FK_semaphor_NETLOSS');
			$table->dropForeign('FK_semaphor_NETSURPLUS');
			$table->dropForeign('FK_semaphor_UNDNETSUR');
		});
	}

}
