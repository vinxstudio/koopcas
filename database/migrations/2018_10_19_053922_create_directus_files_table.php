<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDirectusFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('directus_files', function(Blueprint $table)
		{
			$table->increments('id');
			$table->boolean('status')->nullable()->default(1);
			$table->string('name')->nullable();
			$table->string('title')->nullable()->default('');
			$table->string('location', 200)->nullable();
			$table->text('caption', 65535)->nullable();
			$table->string('type')->nullable()->default('');
			$table->string('charset', 50)->nullable()->default('');
			$table->string('tags')->nullable()->default('');
			$table->integer('width')->unsigned()->nullable()->default(0);
			$table->integer('height')->unsigned()->nullable()->default(0);
			$table->integer('size')->unsigned()->nullable()->default(0);
			$table->string('embed_id', 200)->nullable();
			$table->integer('user')->unsigned();
			$table->dateTime('date_uploaded')->nullable();
			$table->string('storage_adapter', 50)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('directus_files');
	}

}
