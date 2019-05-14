<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBenefTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('benef', function(Blueprint $table)
		{
			$table->foreign('BenefBR_CODE', 'benefCLIENTID')->references('ClientIDBrCode')->on('client')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('BenefRelation', 'benefRELATION')->references('RelationID')->on('relation')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BenefBR_CODE', 'benef_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('benef', function(Blueprint $table)
		{
			$table->dropForeign('benefCLIENTID');
			$table->dropForeign('benefRELATION');
			$table->dropForeign('benef_BRCODE');
		});
	}

}
