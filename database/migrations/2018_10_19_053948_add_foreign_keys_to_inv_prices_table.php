<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInvPricesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('inv_prices', function(Blueprint $table)
		{
			$table->foreign('ITEMID', 'FK_inv_prices_ITEMID')->references('ID')->on('inv_item')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('inv_prices', function(Blueprint $table)
		{
			$table->dropForeign('FK_inv_prices_ITEMID');
		});
	}

}
