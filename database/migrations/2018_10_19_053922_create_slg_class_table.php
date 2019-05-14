<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSlgClassTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('slg_class', function(Blueprint $table)
		{
			$table->boolean('SLG_ClassID')->primary();
			$table->string('SLG_ClassDesc', 45);
			$table->string('SLG_ClassActive', 45);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('slg_class');
	}

}
