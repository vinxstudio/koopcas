<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvPricesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inv_prices', function(Blueprint $table)
		{
			$table->increments('ID');
			$table->smallInteger('BR_CODE')->unsigned();
			$table->integer('ITEMID')->unsigned()->index('FK_inv_prices_ITEMID');
			$table->string('DESC1', 50);
			$table->decimal('QTY', 15);
			$table->decimal('RETAIL', 15);
			$table->decimal('WHOLESALE', 15);
			$table->boolean('ISSELLING')->default(0);
			$table->boolean('ISPURCHASING')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inv_prices');
	}

}
