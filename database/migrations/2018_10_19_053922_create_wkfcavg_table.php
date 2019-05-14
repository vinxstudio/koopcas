<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWkfcavgTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wkfcavg', function(Blueprint $table)
		{
			$table->smallInteger('BR_CODE')->unsigned();
			$table->integer('CLIENTID')->unsigned();
			$table->string('CLIENTIDx', 45)->nullable();
			$table->string('CLIENTNAME', 200)->nullable();
			$table->date('FROMDATE')->nullable();
			$table->date('TODATE')->nullable();
			$table->decimal('SHARECAPITAL', 15)->nullable();
			$table->decimal('AVGSHARECAPITAL', 15)->nullable();
			$table->decimal('INTPAID', 15)->nullable();
			$table->decimal('LESS_REB_DISC_INTPAID', 15)->nullable();
			$table->decimal('DIVIDEND', 15)->nullable();
			$table->decimal('PATRONAGE', 15)->nullable();
			$table->decimal('GrossDPR', 15)->nullable();
			$table->text('Explanation', 65535)->nullable();
			$table->integer('AGINGLOANS')->unsigned()->nullable();
			$table->primary(['BR_CODE','CLIENTID']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wkfcavg');
	}

}
