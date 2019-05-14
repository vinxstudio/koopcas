<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDirectusMessagesRecipientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('directus_messages_recipients', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('message_id')->unsigned();
			$table->integer('recipient')->unsigned();
			$table->boolean('read');
			$table->integer('group')->unsigned()->nullable();
			$table->boolean('archived')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('directus_messages_recipients');
	}

}
