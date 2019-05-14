<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPrefTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pref', function(Blueprint $table)
		{
			$table->foreign('PRefBR_CODE', 'prefCLIENTID')->references('ClientIDBrCode')->on('client')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('PRefRelation', 'prefRELATION')->references('RelationID')->on('relation')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('PRefBR_CODE', 'pref_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pref', function(Blueprint $table)
		{
			$table->dropForeign('prefCLIENTID');
			$table->dropForeign('prefRELATION');
			$table->dropForeign('pref_BRCODE');
		});
	}

}
