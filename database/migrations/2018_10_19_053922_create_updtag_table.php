<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUpdtagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('updtag', function(Blueprint $table)
		{
			$table->boolean('UPDTAGID')->primary();
			$table->string('UPDTAGDesc', 30);
			$table->string('UPDTAGCODE', 2);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('updtag');
	}

}
