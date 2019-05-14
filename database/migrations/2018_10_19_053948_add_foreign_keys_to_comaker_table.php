<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToComakerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comaker', function(Blueprint $table)
		{
			$table->foreign('CoMakerBR_CODE', 'comaker_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('CoMakerBR_CODE', 'comaker_CLIENTID')->references('ClientIDBrCode')->on('client')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('CoMakerBR_CODE', 'comaker_CLIENTIDCOMAKER')->references('ClientIDBrCode')->on('client')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('CoMakerBR_CODE', 'comaker_CTR')->references('MBR_CODE')->on('slmastersum')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('comaker', function(Blueprint $table)
		{
			$table->dropForeign('comaker_BRCODE');
			$table->dropForeign('comaker_CLIENTID');
			$table->dropForeign('comaker_CLIENTIDCOMAKER');
			$table->dropForeign('comaker_CTR');
		});
	}

}
