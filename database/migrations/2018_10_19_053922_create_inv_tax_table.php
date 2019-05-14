<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvTaxTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inv_tax', function(Blueprint $table)
		{
			$table->boolean('ID')->primary();
			$table->string('TaxClassName', 100);
			$table->smallInteger('BR_CODE')->unsigned();
			$table->string('TaxName1', 100)->nullable();
			$table->decimal('TaxRate1', 4)->nullable();
			$table->string('TaxName2', 100)->nullable();
			$table->decimal('TaxRate2', 4)->nullable();
			$table->boolean('TaxIsCompounded')->nullable();
			$table->string('AddOnChargeName', 100)->nullable();
			$table->decimal('AddOnChargeRate', 4)->nullable();
			$table->boolean('IsTaxInclusive')->nullable();
			$table->string('TaxRegNumber', 200)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inv_tax');
	}

}
