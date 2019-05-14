<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCtsTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cts_type', function(Blueprint $table)
		{
			$table->boolean('CTS_TypeCode')->index('Index_1');
			$table->string('CTS_TypeDesc', 45);
			$table->string('CTS_TypeActive', 200)->nullable();
			$table->string('CTS_TypeOLDID', 45)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cts_type');
	}

}
