<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSleTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sle_type', function(Blueprint $table)
		{
			$table->boolean('SLE_TypeCode')->index('Index_2');
			$table->string('SLE_TypeDesc', 30);
			$table->string('SLE_TypeDesc2', 2);
			$table->string('SLE_TypeActive', 200)->default('');
			$table->boolean('SLE_TypeWithCTS');
			$table->string('SLE_TypeOLDID', 45);
			$table->primary(['SLE_TypeCode','SLE_TypeWithCTS','SLE_TypeActive']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sle_type');
	}

}
