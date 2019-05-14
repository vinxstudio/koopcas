<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFusioEventTriggerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fusio_event_trigger', function(Blueprint $table)
		{
			$table->foreign('eventId', 'eventTriggerEventId')->references('id')->on('fusio_event')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fusio_event_trigger', function(Blueprint $table)
		{
			$table->dropForeign('eventTriggerEventId');
		});
	}

}
