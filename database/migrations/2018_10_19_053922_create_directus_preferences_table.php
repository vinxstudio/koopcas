<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDirectusPreferencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('directus_preferences', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user')->unsigned()->nullable();
			$table->string('table_name', 64)->nullable();
			$table->string('title', 128)->nullable();
			$table->string('columns_visible', 300)->nullable();
			$table->string('sort', 64)->nullable()->default('id');
			$table->string('sort_order', 5)->nullable()->default('ASC');
			$table->string('status', 64)->nullable()->default('3');
			$table->text('search_string', 65535)->nullable();
			$table->text('list_view_options', 65535)->nullable();
			$table->unique(['user','table_name','title'], 'user');
			$table->unique(['user','table_name','title'], 'pref_title_constraint');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('directus_preferences');
	}

}
