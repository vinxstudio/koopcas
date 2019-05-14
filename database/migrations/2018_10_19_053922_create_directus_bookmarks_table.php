<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDirectusBookmarksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('directus_bookmarks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user')->unsigned()->nullable();
			$table->string('title')->nullable();
			$table->string('url')->nullable();
			$table->string('section')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('directus_bookmarks');
	}

}
