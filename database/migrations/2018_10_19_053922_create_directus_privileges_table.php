<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDirectusPrivilegesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('directus_privileges', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('table_name');
			$table->boolean('allow_view')->default(0);
			$table->boolean('allow_add')->default(0);
			$table->boolean('allow_edit')->default(0);
			$table->boolean('allow_delete')->default(0);
			$table->boolean('allow_alter')->default(0);
			$table->integer('group_id')->unsigned();
			$table->string('read_field_blacklist', 1000)->nullable();
			$table->string('write_field_blacklist', 1000)->nullable();
			$table->boolean('nav_listed')->default(1);
			$table->boolean('status_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('directus_privileges');
	}

}
