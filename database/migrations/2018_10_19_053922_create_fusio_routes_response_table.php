<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFusioRoutesResponseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fusio_routes_response', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('response')->index('IDX_399764CE3E7B0BFB');
			$table->integer('methodId')->index('IDX_399764CE894CAFBE');
			$table->smallInteger('code');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fusio_routes_response');
	}

}
