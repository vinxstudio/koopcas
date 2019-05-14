<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDirectusMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('directus_messages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('from')->unsigned()->nullable();
			$table->string('subject')->default('');
			$table->text('message', 65535);
			$table->timestamp('datetime')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('attachment', 512)->nullable();
			$table->integer('response_to')->unsigned()->nullable();
			$table->string('comment_metadata')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('directus_messages');
	}

}
