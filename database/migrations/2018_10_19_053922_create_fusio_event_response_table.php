<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFusioEventResponseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fusio_event_response', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('triggerId')->index('IDX_179D16CEB5176711');
			$table->integer('subscriptionId')->index('IDX_179D16CECA77D3A9');
			$table->integer('status');
			$table->integer('code')->nullable();
			$table->integer('attempts');
			$table->dateTime('executeDate')->nullable();
			$table->dateTime('insertDate');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fusio_event_response');
	}

}
