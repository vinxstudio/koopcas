<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFusioConnectionClassTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fusio_connection_class', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('class')->unique('UNIQ_B2588E8CED4B199F');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fusio_connection_class');
	}

}
