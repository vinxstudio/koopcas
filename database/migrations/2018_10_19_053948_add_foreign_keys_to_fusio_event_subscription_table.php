<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFusioEventSubscriptionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fusio_event_subscription', function(Blueprint $table)
		{
			$table->foreign('eventId', 'eventSubscriptionEventId')->references('id')->on('fusio_event')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('userId', 'eventSubscriptionUserId')->references('id')->on('fusio_user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fusio_event_subscription', function(Blueprint $table)
		{
			$table->dropForeign('eventSubscriptionEventId');
			$table->dropForeign('eventSubscriptionUserId');
		});
	}

}
