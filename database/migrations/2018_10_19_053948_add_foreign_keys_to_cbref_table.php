<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCbrefTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cbref', function(Blueprint $table)
		{
			$table->foreign('CBRefBR_CODE', 'cbrefCLIENTID')->references('ClientIDBrCode')->on('client')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('CBRefType', 'cbrefCREDITORTYPE')->references('creditortypeID')->on('creditortype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('CBRefBR_CODE', 'cbref_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cbref', function(Blueprint $table)
		{
			$table->dropForeign('cbrefCLIENTID');
			$table->dropForeign('cbrefCREDITORTYPE');
			$table->dropForeign('cbref_BRCODE');
		});
	}

}
