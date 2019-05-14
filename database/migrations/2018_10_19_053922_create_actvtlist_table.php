<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActvtlistTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('actvtlist', function(Blueprint $table)
		{
			$table->integer('ID')->unsigned()->primary();
			$table->string('M_DESC', 200);
			$table->string('M_DESC2', 200)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('actvtlist');
	}

}
