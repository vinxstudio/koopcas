<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrtyobjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prtyobject', function(Blueprint $table)
		{
			$table->boolean('ID')->primary();
			$table->string('DESCR', 45);
			$table->integer('CLIENTNUMBER')->unsigned()->default(0);
			$table->string('USERLABEL', 45);
			$table->string('TERMINALDESCR', 45);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('prtyobject');
	}

}
