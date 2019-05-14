<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFusioEventTriggerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fusio_event_trigger', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('eventId')->index('IDX_25BFA2242B2EBB6C');
			$table->integer('status');
			$table->text('payload');
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
		Schema::drop('fusio_event_trigger');
	}

}
