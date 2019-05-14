<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentmodeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('paymentmode', function(Blueprint $table)
		{
			$table->boolean('PaymentModeID')->primary();
			$table->string('PaymentModeDesc', 45);
			$table->string('PaymentModeOLDID', 1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('paymentmode');
	}

}
