<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCisaMembersnameTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cisa_membersname', function(Blueprint $table)
		{
			$table->foreign('MemberBR_CODE', 'fk_memBR_CODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cisa_membersname', function(Blueprint $table)
		{
			$table->dropForeign('fk_memBR_CODE');
		});
	}

}
