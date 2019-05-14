<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPassbkTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('passbk', function(Blueprint $table)
		{
			$table->foreign('PassbkPBTYPE', 'FK_passbk_PBTYPE')->references('PassBkTypeID')->on('passbktype')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('passbk', function(Blueprint $table)
		{
			$table->dropForeign('FK_passbk_PBTYPE');
		});
	}

}
