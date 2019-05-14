<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDirectusSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('directus_settings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('collection', 64)->nullable();
			$table->string('name', 64)->nullable();
			$table->string('value')->nullable();
			$table->unique(['collection','name'], 'UniqueCollectionandName');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('directus_settings');
	}

}
