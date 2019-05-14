<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFusioEventResponseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fusio_event_response', function(Blueprint $table)
		{
			$table->foreign('subscriptionId', 'eventResponseSubscriptionId')->references('id')->on('fusio_event_subscription')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('triggerId', 'eventResponseTriggerId')->references('id')->on('fusio_event_trigger')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fusio_event_response', function(Blueprint $table)
		{
			$table->dropForeign('eventResponseSubscriptionId');
			$table->dropForeign('eventResponseTriggerId');
		});
	}

}
