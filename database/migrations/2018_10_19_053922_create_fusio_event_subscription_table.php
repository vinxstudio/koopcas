<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFusioEventSubscriptionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fusio_event_subscription', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('eventId')->index('IDX_3A5B90652B2EBB6C');
			$table->integer('userId')->index('IDX_3A5B906564B64DCC');
			$table->integer('status');
			$table->string('endpoint');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fusio_event_subscription');
	}

}
