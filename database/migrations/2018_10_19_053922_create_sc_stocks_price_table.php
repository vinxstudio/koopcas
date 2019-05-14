<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateScStocksPriceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sc_stocks_price', function(Blueprint $table)
		{
			$table->smallInteger('SC_PRIbrcode')->unsigned();
			$table->decimal('SC_PRIamt', 15);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sc_stocks_price');
	}

}
